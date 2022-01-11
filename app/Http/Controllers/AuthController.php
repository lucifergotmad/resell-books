<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView() 
    {
        return view('auth.register');
    }

    public function forgotPasswordView()
    {
        return view('auth.forgot_password');
    }
}
