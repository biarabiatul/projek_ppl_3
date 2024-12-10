<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index()
    {
        // Ambil semua data siswa
        $siswas = Siswa::all();

        // Kirim data ke view
        return view('siswa.index', compact('siswas'));
    }
}
