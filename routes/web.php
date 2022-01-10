<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function(){
//     return view('test');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// /// arahkan ke link ini ketika user klik "login with google"
// Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'google']);
// /// siapkan route untuk menampung callback dari google
// Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'google_callback']);
// Route::get('auth/google/callback', [App\Http\Controllers\Auth\AuthController::class, 'SocialSignup']);

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');
