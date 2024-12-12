<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Soal extends Model
{
    use HasFactory;

    protected $fillable = [
        'soal',
        'pilihan_a',
        'pilihan_b',
        'pilihan_c',
        'pilihan_d',
        'jawaban_benar',
    ];
}
