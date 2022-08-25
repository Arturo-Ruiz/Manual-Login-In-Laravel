<?php

use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome');

Route::view('/login', 'login');

Route::view('/dashboard', 'dashboard');

Route::post('login', function(){
    $credentials = request()->only('email', 'password');

    if(Auth::attempt($credentials)){
        return 'Your are Login';
    }else{
        return "Login Failed";
    }
}); 

