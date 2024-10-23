<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class LoginController extends Controller
{
    public function showLoginFormSiswa()
    {
        return view('auth.login-siswa');
    }

    public function loginSiswa(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'password' => 'required|string',
        ]);

        $user = User::where('nisn', $request->nisn)->where('role', 'siswa')->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('/home');
        }

        return back()->withErrors(['loginError' => 'NISN atau password salah.']);
    }

    public function showLoginFormGuru()
    {
        return view('auth.login-guru');
    }

    public function loginGuru(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('name', $request->name)->where('role', 'guru')->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('/home');
        }

        return back()->withErrors(['loginError' => 'Nama atau password salah.']);
    }
}
