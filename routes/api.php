<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DataUsageController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OutController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('sociallogin/{provider}', [AuthController::class, 'SocialSignup']);
Route::post('auth/{provider}', [OutController::class, 'index'])->where('vue', '.*');
Route::post('auth/{provider}/callback', [OutController::class. 'index'])->where('vue', '.*');

Route::group(['middleware'=> 'api'], function(){
    // dashboard
    Route::get('user', [UserController::class, 'show']); // done
    Route::get('user/data-usage/{id}', [DataUsageController::class, 'getThreeMonth']);
    Route::patch('user/control/pompa', [StateController::class, 'changePompaState']); // done
    Route::patch('user/control/mode', [StateController::class, 'changeModeState']); // done
    Route::delete('user/notification', [NotificationController::class, 'destroyAllNotifications']); // done
    // analytic
    Route::get('user/data-usage', [UserController::class, 'getAnalytic']); // done
    Route::delete('user/data-usage/{id}', [DataUsageController::class, 'destroy']); // done
    // account
    Route::get('user/account', [UserController::class, 'showDetail']); // done
    Route::patch('user/{user:id}', [UserController::class, 'update']); //done
    // list user
    Route::get('list/user/all', [UserController::class, 'getAllUser']); // done
    Route::delete('list/user/{user:id}', [UserController::class, 'destroyUser']); // done
    Route::patch('list/user/{user:id}', [UserController::class, 'updateUsers']); //done

    // broker
    Route::patch('user/notification/update', [NotificationController::class, 'updateNotifications']);
    Route::get('user/notification', [NotificationController::class, 'getNotifications']);
    Route::post('user/notification', [NotificationController::class, 'setNotifications']);
    
    // Route::patch('user/update', [UserController::class, 'updateProfile']);
    // Route::post('data', [DataUsageController::class, 'createDataUsages']);
    // Route::get('data', [DataUsageController::class, 'getDataUsageOneMonth']);

    Route::get('user/device', [DeviceController::class, 'getDevice']); 
    Route::post('user/device', [DeviceController::class, 'createDevice']); 

    Route::get('logout', [AuthController::class, 'logout']);
});



// testing
// Route::get('testing/user/analytic', [UserController::class, 'getAnalytic']); 

// Route::post('testing/user/device', [DeviceController::class, 'postDevice']); 
// Route::patch('testing/user/device', [DeviceController::class, 'patchDevice']); 



