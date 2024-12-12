<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;
use App\Models\JawabanPengguna;
use App\Models\HasilEvaluasi;
use Illuminate\Support\Facades\Auth;

class EvaluasiController extends Controller
{
    // Menampilkan halaman evaluasi dengan soal-soal
    public function index(Request $request)
    {
        // Mendapatkan nomor soal saat ini
        $currentQuestion = $request->get('question', 1); // Default ke soal pertama

        // Mendapatkan soal yang sesuai dengan nomor soal saat ini
        $currentSoal = Soal::find($currentQuestion);
        
        // Mendapatkan semua soal
        $soals = Soal::all();

        // Mendapatkan jawaban pengguna yang sudah ada
        $jawaban = JawabanPengguna::where('user_id', Auth::id())->pluck('jawaban', 'soal_id');
        
        return view('evaluasi.index', compact('soals', 'jawaban', 'currentSoal', 'currentQuestion'));
    }

    // Menyimpan jawaban pengguna
    public function jawab(Request $request)
    {
        $request->validate([
            'jawaban' => 'required',
            'soal_id' => 'required|exists:soals,id',
        ]);

        // Menyimpan atau memperbarui jawaban pengguna
        JawabanPengguna::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'soal_id' => $request->soal_id,
            ],
            ['jawaban' => $request->jawaban]
        );

        return redirect()->route('evaluasi.index', ['question' => $request->soal_id]);
    }

    // Menyelesaikan evaluasi dan menghitung skor
    public function selesai()
    {
        // Mengambil soal-soal dan jawaban pengguna
        $soals = Soal::all();
        $jawaban = JawabanPengguna::where('user_id', Auth::id())->get();

        $score = 0;
        foreach ($soals as $soal) {
            $jawab = $jawaban->where('soal_id', $soal->id)->first();
            if ($jawab && $jawab->jawaban === $soal->jawaban_benar) {
                $score++;
            }
        }

        // Menyimpan hasil evaluasi
        HasilEvaluasi::create([
            'user_id' => Auth::id(),
            'nilai' => $score,
        ]);

        // Mengembalikan halaman hasil evaluasi
        return view('evaluasi.selesai', compact('score'));
    }
}
