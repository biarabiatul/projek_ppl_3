<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Guru
        User::create([
            'name' => 'Guru',
            'nip' => '12345678',
            'password' => Hash::make('guru1234'),
            'role' => 'guru',
        ]);

        // Data Siswa (contoh)
        User::create([
            'name' => 'Rabiatul Adawiyah',
            'nisn' => '2210131220007',
            'password' => Hash::make('atul1234'),
            'role' => 'siswa',
        ]);
    }
}
