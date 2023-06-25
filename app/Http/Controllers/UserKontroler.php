<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserKontroler extends Controller
{
    public static function login()
    {
        return view('login');
    }

    public static function daftar()
    {
        return view('register');
    }

    public static function mendaftar(Request $req)
    {
        $valid = $req->validate([
            'nama' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:10',
        ]);

        User::create($valid);
        $req->session()->flash('success', 'Akun Berhasil terdaftar');
        return redirect('/login');
    }

    public static function auth(Request $req)
    {
        $masuk = $req->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:3|max:10',
        ]);
        if (Auth::attempt($masuk)) {
            $req->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('error', 'Ada yang salah, Tidak Bisa Masuk!');
    }

    public static function keluar(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
