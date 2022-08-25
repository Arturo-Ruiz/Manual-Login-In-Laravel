<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request, Redirector $redirect){

        $remember = $request->filled('remember');

        if (Auth::attempt($request->only('email', 'password'), $remember)) {

            $request->session()->regenerate();

            return $redirect
                ->intended('dashboard')
                ->with('status', 'You are logged in');
        } else {
            return $redirect
                ->route('login')
                ->with('error', __('auth.failed'));
        }
    }
}
