<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\Models\Evaluasi;



class EvaluasiController extends Controller
{
    public function showEvaluasi()
    {
        return view('evaluasi'); // Mengembalikan tampilan evaluasi
    }

    public function submitEvaluasi(Request $request)
    {
        // Aturan validasi
        $validator = Validator::make($request->all(), [
            'soal1' => 'required',
            'soal2' => 'required',
            'soal3' => 'required',
            'soal4' => 'required',
            'soal5' => 'required',
            'soal6' => 'required',
            'soal7' => 'required',
            'soal8' => 'required',
            'soal9' => 'required',
            'soal10' => 'required',
            'soal11' => 'required',
            'soal12' => 'required',
            'soal13' => 'required',
            'soal14' => 'required',
            'soal15' => 'required',
            'soal16' => 'required',
            'soal17' => 'required',
            'soal18' => 'required',
            'soal19' => 'required',
            'soal20' => 'required',
        ]);

        // Jika validasi gagal, kembali ke form dengan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Ambil jawaban dari request
        $jawaban = $request->except('_token');

        // Di sini Anda dapat menyimpan jawaban ke database atau melakukan proses lain
        // Contoh penyimpanan jawaban (misalnya ke model Evaluasi)
        // Evaluasi::create(['jawaban' => json_encode($jawaban)]);



        Evaluasi::create([
            'user_id' => auth()->id(), // Hanya jika Anda menggunakan otentikasi
            'jawaban' => json_encode($jawaban),
        ]);

        // Redirect ke halaman sukses atau halaman lain setelah pengiriman berhasil
        return redirect()->route('evaluasi.sukses')->with('success', 'Jawaban berhasil dikirim!');
    }

    public function evaluasiSukses()
    {
        return view('evaluasi-sukses'); // Halaman setelah pengiriman jawaban berhasil
    }
}
