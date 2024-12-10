<?php

namespace App\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }
    public function register()
    {
        return view('frontend.auth.register');
    }
}