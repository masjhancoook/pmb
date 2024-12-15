<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function render()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'password.required' => 'Password harus diisi',
            ]
        );

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended(route(name: 'app.index'))->with('success', 'Login berhasil');
        }
        return back()->with('error', 'login gagal, silahkan coba lagi');
    }

    public function distroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout berhasil');
    }
}
