<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\siswaController;







Route::get('/materi', function () {
    return view('layouts/materi');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/login', function () {
//     return view('login');
// });

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

# Merkurius 
Route::get('/merkurius', function () {
    return view('merkurius');
});

Route::get('/kuis_merkurius', function () {
    return view('kuis_merkurius');
});

Route::get('/game_merkurius', function () {
    return view('game_merkurius');
});

# Venus
Route::get('/venus', function () {
    return view('venus');
});

Route::get('/kuis_venus', function () {
    return view('kuis_venus');
});

Route::get('/game_venus', function () {
    return view('game_venus');
});

# Bumi
Route::get('/bumi', function () {
    return view('bumi');
});

Route::get('/kuis_bumi', function () {
    return view('kuis_bumi');
});

Route::get('/game_bumi', function () {
    return view('game_bumi');
});

# Mars
Route::get('/mars', function () {
    return view('mars');
});

Route::get('/kuis_mars', function () {
    return view('kuis_mars');
});

Route::get('/game_mars', function () {
    return view('game_mars');
});

# Jupiter
Route::get('/jupiter', function () {
    return view('jupiter');
});

Route::get('/kuis_jupiter', function () {
    return view('kuis_jupiter');
});

Route::get('/game_jupiter', function () {
    return view('game_jupiter');
});

Route::get('/matahari', function () {
    return view('matahari');
});

Route::get('/saturnus', function () {
    return view('saturnus');
});

Route::get('/uranus', function () {
    return view('uranus');
});

Route::get('/neptunus', function () {
    return view('neptunus');
});



Route::get('/evaluasi', function () {
    return view('evaluasi');
});




Route::get('/', [LandingPageController::class, 'index']);
Route::get('/', function () {
    return view('landing');
});


// Route::get('/', function () {
//     return view('welcome');
// });






// Route::get('register/siswa', [RegisterController::class, 'showRegistrationFormSiswa'])->name('register.siswa');
// Route::post('register/siswa', [RegisterController::class, 'registerSiswa'])->name('register.siswa');

// Route::get('login/siswa', [LoginController::class, 'showLoginFormSiswa'])->name('login.siswa');
// Route::post('login/siswa', [LoginController::class, 'loginSiswa'])->name('login.siswa');

// Route untuk home setelah login
Route::get('/home', function() {
    return view('home'); // Pastikan view 'home.blade.php' ada
})->name('home')->middleware('auth');


// Route::get('register/siswa', [RegisterController::class, 'showRegistrationFormSiswa'])->name('register.siswa');
// Route::post('register/siswa', [RegisterController::class, 'registerSiswa']);

// Route::get('login/siswa', [LoginController::class, 'showLoginFormSiswa'])->name('login.siswa');
// Route::post('login/siswa', [LoginController::class, 'loginSiswa']);

// Route::get('login/guru', [LoginController::class, 'showLoginFormGuru'])->name('login.guru');
// Route::post('login/guru', [LoginController::class, 'loginGuru']);


Route::get('/pendahuluan', function () {
    return view('pendahuluan');
});


Route::get('/capaian-pembelajaran', function () {
    return view('capaian');
});




Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');




# Route guru
Route::get('/layout_guru', function () {
    return view('layouts/layout_guru');
});

Route::get('/nilai_kuis', function () {
    return view('guru/nilai_kuis');
});

Route::get('/siswa', [siswaController::class, 'index']);
