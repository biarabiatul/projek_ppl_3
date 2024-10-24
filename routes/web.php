<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;







Route::get('/materi', function () {
    return view('layouts/materi');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pendahuluan', function () {
    return view('pendahuluan');
});

Route::get('/tata_surya', function () {
    return view('tata_surya');
});

Route::get('/bumi_satelit', function () {
    return view('bumi_satelit');
});

Route::get('/bumi', function () {
    return view('bumi');
});

Route::get('/venus', function () {
    return view('venus');
});

Route::get('/merkurius', function () {
    return view('merkurius');
});

Route::get('/matahari', function () {
    return view('matahari');
});

Route::get('/jupiter', function () {
    return view('jupiter');
});

Route::get('/jupiter-latihan', function () {
    return view('jupiter-latihan');
});

Route::get('/jupiter-game', function () {
    return view('jupiter-game');
});

Route::get('/landing', [LandingPageController::class, 'index']);
Route::get('/', function () {
    return view('landing');
});


Route::get('/', function () {
    return view('welcome');
});




Route::get('register/siswa', [RegisterController::class, 'showRegistrationFormSiswa'])->name('register.siswa');
Route::post('register/siswa', [RegisterController::class, 'registerSiswa']);

Route::get('login/siswa', [LoginController::class, 'showLoginFormSiswa'])->name('login.siswa');
Route::post('login/siswa', [LoginController::class, 'loginSiswa']);

Route::get('login/guru', [LoginController::class, 'showLoginFormGuru'])->name('login.guru');
Route::post('login/guru', [LoginController::class, 'loginGuru']);


Route::get('/pendahuluan', function () {
    return view('pendahuluan');
});

