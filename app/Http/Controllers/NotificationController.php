<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        // return $this->middleware('auth:api');
    }

    public function getNotifications()
    {
        $this->middleware('auth:api');
        $id_user = auth()->user()->id;
        try {
            $notification = Notification::where("id_user", "=", $id_user)
                            ->orderBy("created_at", "desc")
                            ->simplePaginate(4);
        } catch (\Throwable $th) {
            return response($th, 500);
        }

        return $notification;
        
    }
    
    public function setNotifications(){
        // dd(request('read'));
        $id_user = User::where('api_key', '=', request('api_key'))->firstOrFail('id')->id;
        try {
            $query = Notification::create([
                'description' => request('description'),
                'read' => request('read'),
                'id_user' => $id_user,
            ]);   
        } catch (\Throwable $th) {
            return response("Ada yang salah", 500);
        }

        return response(['msg' => 'success create notification', "notification" => $query], 201);
    }

    public function updateNotifications()
    {   
        $id = auth()->user()->id;
        // dd($id);
        try {
            Notification::where('id_user', '=', $id)->update([
                'read' => request('read') 
            ]);   
        } catch (\Throwable $th) {
            return response('Ada yang salah', 500);
        }

        return response('Success update notification', 200);

    }

    public function destroyAllNotifications(){
        $id = auth()->user()->id;
        $id_notification = Notification::where('id_user', '=', $id)->get('id')->take(5)->toArray();
        // return $id_notification;
        $count = count($id_notification);
        // dd($id_notification, $count);
        try {
            for ($i=0; $i < $count ; $i++) { 
                Notification::where("id", "=", $id_notification[$i]["id"])->delete();
            }
            // $notification->truncate();   
        } catch (\Throwable $th) {
            return response($th, 500);
        }
        return response('Success delete notifications', 200);
        
    }
}
