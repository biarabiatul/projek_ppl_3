<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // Tampilkan form login guru
    public function showGuruLoginForm()
    {
        return view('auth.login-guru');
    }

    // Proses login guru
    public function guruLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'nip' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user berdasarkan NIP dan role guru
        $user = User::where('nip', $request->nip)->where('role', 'guru')->first();

        // Jika user ditemukan, cek password
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user); // Login user
            return redirect()->intended('layout_guru'); // Arahkan ke halaman tujuan
        }

        // Jika login gagal
        return back()->withErrors(['login' => 'NIP atau password salah.']);
    }

    // Tampilkan form login siswa
    public function showSiswaLoginForm()
    {
        return view('auth.login-siswa');
    }

    // Proses login siswa
    public function siswaLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'nisn' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('nisn', 'password');
        $user = User::where('nisn', $credentials['nisn'])->where('role', 'siswa')->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('home');
        }

        return back()->withErrors(['nisn' => 'NISN atau password salah']);
    }


    // Tampilkan form register siswa
    public function showRegisterForm()
    {
        return view('auth.register-siswa');
    }

    // Proses register siswa
    public function registerSiswa(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'nisn' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat akun siswa baru
        User::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        return redirect()->route('login.siswa');
    }

    
}
