<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    

    public function createDevice(){
        $query = Device::where('name', '=', request('name'))->first();
        $id_user = User::where('api_key', '=', request('api_key'))->firstOrFail()->id;
        if($query){
            try {
                Device::where('id', "=", $query->id)->update([
                    'status' => request('status')
                ]);
            } catch (\Throwable $th) {
                return response($th, 500);
            }
            return response('success updated device', 201);
        } else{
            try {
                Device::create([
                    'name' => request('name'),
                    'id_user' => $id_user,
                    'status' => request('status')
                ]);   
            } catch (\Throwable $th) {
                return response($th, 500);
            }
            return response('success create new device', 201);
        }
    }

    public function getDevice(){
        $id = auth()->user()->id;
        $key = User::where('id', '=', $id)->firstOrFail()->api_key;

        try {
            $device = Device::where("id_user", "=", $id)->simplePaginate(4);
        } catch (\Throwable $th) {
            return response($th, 500);
        }

        return $device;
    }

    // public function destroyDevice(){

    //     try {
    //         $device->delete();   
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //     }
        
    // }
}
