<?php

namespace App\Http\Controllers;

use App\Models\State;
use Exception;

class StateController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:api');
    }
    
    public function changeModeState(){
        $id = Auth()->user()->id;
        // $id = 29;
        request()->validate([
            'mode' => 'required|in:0,1'
        ]);
        State::where('id_user', $id)->update(['mode' => request('mode')]);

        return response('successfull change state mode', 200);
    }
    public function changePompaState(){
        $id = Auth()->user()->id;
        // $id = 29;
        request()->validate([
            'pompa' => 'required|in:0,1'
        ]);
        State::where('id_user', $id)->update(['pompa' => request('pompa')]);
        // dd($c);
        // return response('successfull change state pompa', 200);
        return response('successfull change state pompa', 200);
    }

    public function getState($id)
    {
        try {
            $data = State::where('id_user', $id)
                           ->get(['pompa', 'mode'])
                           ->map(function($data){
                               return [
                                    'pompa' => $data['pompa'],
                                    'mode' => $data['mode'],
                               ];
                           });
        } catch (Exception $e) {
            $data = "Ada yang salah.";
        }
        return $data;
    }
}
