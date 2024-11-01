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
            // Debug: Cek apakah data dari form diterima
        // dd($request->all()); // Menampilkan semua input dari form

        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|numeric|unique:users',
            'password' => 'required|string|min:1|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'role' => 'siswa',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.siswa')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
