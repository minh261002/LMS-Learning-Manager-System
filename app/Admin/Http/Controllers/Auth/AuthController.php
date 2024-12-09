<?php

namespace App\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {

        $data = $request->validated();

        $email = $data['email'];
        $password = $data['password'];

        if (auth()->guard('admin')->attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('success', 'Xin chào, ' . auth()->guard('admin')->user()->name);
        }

        return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác');
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('success', 'Đăng xuất thành công');
    }

    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }

    public function resetPassword()
    {
        return view('admin.auth.reset-password');
    }
}