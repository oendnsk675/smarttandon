<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DataMonthly;
use Illuminate\Support\Str;
use App\Models\DataUsage;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Carbon\Carbon;
use Socialite;
use Hash;

class AuthController extends Controller
{
    

    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function createUserState($data){
        State::create([
            "pompa" => $data['pompa'],    
            "mode" => $data['mode'],    
            "id_user" => $data['id_user']    
        ]);
    }

    public function getPositionMonth(){
        $listMonth = [
            1 => [1, 2, 3],
            2 => [4, 5, 6],
            3 => [7, 8, 9],
            4 => [10, 11, 12]
        ];
        $now = Carbon::now()->month;
        foreach($listMonth as $month){
            foreach ($month as $key) {
                if ($now == $key) {
                    return array_search($month, $listMonth);
                }
            }
        }
    }

    
    public function SocialSignup($provider)
    {
        // return 'asd';
        $email = '';
        $name = '';
        $google_id = '';
        $password = '';
        $api_key = '';
        // Socialite will pick response data automatic 
        $user = Socialite::driver($provider)->stateless()->user();
        // return $user;
        $createUser = new User;
        // mendapatkan email dari name
        $name =  $user->getName();
        // mendapatkan email dari google
        $email = $user->getEmail();
        // mendapatkan google_id
        $google_id = $user->getId();
        // membuat password
        $password = $user->getName();
        // mendapatkan photo dari avatar google
        $photo = $user->getAvatar();
        // membuat key
        $api_key = $google_id;

        
        $isUser = User::where('google_id', $user->getId())->first();
        
        // return $isUser;
        // jika sudah terdaftar maka langsung login
        if($isUser){
            // dd('asd');
            $crediential = [
                'email' => $email,
                'password' => $password
            ];

            // return $crediential;

            if(!$token = auth()->setTTL(7200)->attempt($crediential)){
                return response(null, 401);  
            }

            return response()->json([
                'msg' => 'sign successfull',
                'dataUsageAnalytics' => $this->getPositionMonth(),
                'token' => $token 
            ], 200);

        }else{
            // dd('das');

            // jika belum maka register
            // sebelumnya cek apakah dia email admin atau tidak
            if(env('ADMIN_EMAIL') == $email){
                $createUser->role = 'admin';
            }else{
                $createUser->role = 'user';
            }
            $createUser->name =$name;
            $createUser->email = $email;
            $createUser->email_verified_at = \Carbon\Carbon::now();
            $createUser->google_id = $google_id;
            $createUser->password = Hash::make($password);
            $createUser->api_key = $api_key;
            $createUser->photo = $photo;
            $createUser->speechOn = "hidupkan pompa";
            $createUser->speechOff = "matikan pompa";
            $createUser->cost = "11000";
            // save
            $createUser->save();
            // insert data monthlies default 0
            DataMonthly::create([
                'usages' => 0,
                'id_user' => $createUser->id 
            ]);

            $crediential = [
                'email' => $email,
                'password' => $password
            ];

            
            // check auth token;
            if(!$token = auth()->setTTL(7200)->attempt($crediential)){
                return response(null, 401);  
            }

            // create user state
            $this->createUserState([
                'pompa' => '0',
                'mode' => '0',
                'id_user' => $createUser->id,
            ]);

            return response()->json([
                'msg' => 'sign successfull',
                'dataUsageAnalytics' => $this->getPositionMonth(),
                'token' => $token 
            ], 200);
        }

        // return response()->json($user);
    }

    public function user(){
        return response()->json(auth()->user()->name);
    }

    public function logout(){
        auth()->logout();

        return response()->json('Successfully logged out', 200);
    }

}