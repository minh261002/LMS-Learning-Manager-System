<?php

namespace App\Frontend\Http\Controllers;

use App\Frontend\Http\Requests\Auth\LoginRequest;
use App\Frontend\Http\Requests\Auth\RegisterRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {
        $data = $request->validated();

        if (!auth()->guard('web')->attempt($data)) {
            return back()->with('error', 'Email hoặc mật khẩu không chính xác');
        }

        return redirect()->route('home')->with('success', 'Đăng nhập thành công');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }

    public function handleRegister(RegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        auth()->guard('web')->login($user);

        return redirect()->route('home')->with('success', 'Đăng ký tài khoản thành công');
    }

    public function logout()
    {
        auth()->guard('web')->logout();
        return redirect()->route('login')->with('success', 'Đăng xuất thành công');
    }
}