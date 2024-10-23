<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationFormSiswa()
    {
        return view('auth.register-siswa');
    }

    public function registerSiswa(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|numeric|unique:users',
            'kelas' => 'required|string',
            'password' => 'required|string|min:1|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'kelas' => $request->kelas,
            'role' => 'siswa',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.siswa')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
