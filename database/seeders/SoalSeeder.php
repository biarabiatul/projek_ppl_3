<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soals = [
            [
                'soal' => 'Apa ibu kota Indonesia?',
                'pilihan_a' => 'Jakarta',
                'pilihan_b' => 'Bandung',
                'pilihan_c' => 'Surabaya',
                'pilihan_d' => 'Medan',
                'jawaban_benar' => 'pilihan_a',
            ],
            [
                'soal' => 'Hasil dari 5 + 3 adalah?',
                'pilihan_a' => '6',
                'pilihan_b' => '7',
                'pilihan_c' => '8',
                'pilihan_d' => '9',
                'jawaban_benar' => 'pilihan_c',
            ],
            [
                'soal' => 'Hewan yang hidup di air disebut?',
                'pilihan_a' => 'Mamalia',
                'pilihan_b' => 'Reptil',
                'pilihan_c' => 'Ikan',
                'pilihan_d' => 'Amfibi',
                'jawaban_benar' => 'pilihan_c',
            ],
            [
                'soal' => 'Planet terbesar di Tata Surya adalah?',
                'pilihan_a' => 'Bumi',
                'pilihan_b' => 'Jupiter',
                'pilihan_c' => 'Mars',
                'pilihan_d' => 'Venus',
                'jawaban_benar' => 'pilihan_b',
            ],
            [
                'soal' => 'Warna bendera Indonesia adalah?',
                'pilihan_a' => 'Merah Putih',
                'pilihan_b' => 'Biru Kuning',
                'pilihan_c' => 'Merah Hijau',
                'pilihan_d' => 'Hitam Putih',
                'jawaban_benar' => 'pilihan_a',
            ],
        ];

        foreach ($soals as $soal) {
            Soal::create($soal);
        }
    }
}
