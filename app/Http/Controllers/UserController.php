<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JWTAuth;

class UserController extends Controller
{
    public $infoDataUsage;
    public $notifications;
    public $devices;
    public $infoDataUsageOneMonth;
    public $state;
    public $currentLast = [];

    public function __construct()
    {
        return $this->middleware('auth:api');
    }

    public function getAllUser(){
        try {
            $data = User::paginate(5);   
        } catch (\Throwable $th) {
            return response()->json("ada yang salah", 500);
        }

        return response()->json($data, 200);
    }

    public function destroyUser(User $user){
        try {
            $user->delete();
        } catch (\Throwable $th) {
            return response()->json("ada yang salah", 500);
        }
        return response()->json('deleted successfull', 200);
    }

    public function show(){
        $id = auth()->user()->id;
        // $id = 29;
        // dd($id);
        if($id){
            try {
                
                // get data last month and current month
                $dataUsage = new DataUsageController;
                $states = new StateController;
                $notification = new NotificationController;
                $device = new DeviceController;
                $this->infoDataUsage = $dataUsage->getDataLastMonthCurrentMonth($id);
                $this->state = $states->getState($id);
                $this->notifications = $notification->getNotifications($id);
                $this->devices = $device->getDevice($id);
    
                // dd($this->infoDataUsage['data'][0]['created_at']);
                
                if($this->infoDataUsage['count'] == 2){
                    $this->currentLast = [
                        $currentMonth = $this->infoDataUsage['data'][0],
                        $lastMonth = $this->infoDataUsage['data'][1]
                    ];
                }elseif($this->infoDataUsage['count'] == 1){
                    $this->currentLast = [
                        $currentMonth = $this->infoDataUsage['data'][0],
                        $lastMonth = null
                    ];
                }elseif($this->infoDataUsage['count'] == 0){
                    $this->currentLast = [
                        $currentMonth = null,
                        $lastMonth = null
                    ];
                }
                $data = User::where('id', $id)->get()->map(function($data){
                    return [
                        'id' => $data->id, 
                        'name' => $data->name, 
                        'email' => $data->email, 
                        'monthly_fee' => $data->cost, 
                        'photo' => $data->photo, 
                        'info' => $this->infoDataUsage['msg'], 
                        'role' => $data->role, 
                        'api_key' => $data->api_key, 
                        'dataUsageCurrentLast' => $this->currentLast,
                        'statePompa' => $this->state[0]['pompa'] == 1 ? true : false, 
                        'stateMode' => $this->state[0]['mode'], 
                        'speechOn' => $data->speechOn, 
                        'speechOff' => $data->speechOff, 
                        'notifications' => $this->notifications,
                        'devices' => $this->devices
                    ];
                });
                return $data;
                // return response()->json($data, 200);
            } catch (\Throwable $th) {
                return response()->json($th);
            }
            
        }else{
            return response()->json(null, 401);
        }
    }

    public function getAnalytic()
    {
        $id = auth()->user()->id;
        // $id = 30;
        if($id){
            // get data last month and current month
            $dataUsage = new DataUsageController;
            $this->infoDataUsage = $dataUsage->getDataLastMonthCurrentMonth($id);
            $this->dataUsageOneMonth = $dataUsage->getDataUsageOneMonth($id);
            // dd($this->infoDataUsage);
            $data = User::where('id', $id)->get()->map(function($data){
                return [
                    'id' => $data->id, 
                    'name' => $data->name, 
                    'photo' => $data->photo, 
                    'info' => $this->infoDataUsage['msg'], 
                    'role' => $data->role, 
                    'dataUsage' => $this->dataUsageOneMonth, 
                    'speechOn' => $data->speechOn, 
                    'speechOff' => $data->speechOff, 
                ];
            });
        }else{
            return response()->json(null, 401);
        }

        
        // dd($data);
        return response()->json($data, 200);
    }
    
    public function showDetail()
    {   
        $id = auth()->user()->id;
        // $id = 29;

        try {
            $data = User::where('id', $id)->get([
                'id',
                'name',
                'cost',
                'photo',
                'email',
                'api_key',
                'speechOn',
                'speechOff',
            ]);

            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json('Ada kesalahan', 500);
        }
    }

    public function update(User $user){
        request()->validate([
            'name' => ['required','min:3'],
            'monthly_fee' => ['required', 'numeric'],
            'speechOn' => 'required',
            'speechOff' => 'required'
        ]);
        try {
            $user->update([
                "name" => request('name'),
                "cost" => request('monthly_fee'),
                "speechOn" => request('speechOn'),
                "speechOff" => request('speechOff'),
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }

        return response()->json('update data successfull', 201);
    }

    public function updateUsers(User $user){
        // return request('role');
        request()->validate([
            'name' => ['required','min:3'],
            'role' => ['required', 'in:admin,user']
        ]);

        $user->update([
            'name' => request('name'),
            'role' => request('role'),
        ]);

        return response()->json('update successfull', 200);
    }
    

}
