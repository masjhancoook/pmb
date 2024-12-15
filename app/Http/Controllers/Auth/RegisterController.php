<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function render()
    {
        $title = 'Register';
        return view('auth.register', ['title' => $title]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed'
            ],
            [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'password.required' => 'Password harus diisi',
                'password.confirmed' => 'Konfirmasi password tidak sesuai'
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'  => bcrypt($request->password),
        ])->syncRoles('Mahasiswa');

        if (!$user) {
            return redirect()->back()->with('error', 'Gagal mendaftar');
        }
        Auth::login($user);
        return redirect()->route('login')->with('success', 'Berhasil mendaftar');
    }
}
