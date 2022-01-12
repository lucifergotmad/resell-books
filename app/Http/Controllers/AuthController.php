<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register() 
    {
        return view('auth.register');
    }

    public function forgot_password()
    {
        return view('auth.forgot_password');
    }
}
