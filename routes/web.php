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

Route::view('/login', 'login')->name('login')->middleware('guest');;

Route::view('/dashboard', 'dashboard')->middleware('auth');

Route::post('login', function () {

    $credentials = request()->only('email', 'password');

    $remember = request()->filled('remember');

    if (Auth::attempt($credentials, $remember)) {
        request()->session()->regenerate();

        return redirect('dashboard');
    } else {
        return redirect('login');
    }
});
