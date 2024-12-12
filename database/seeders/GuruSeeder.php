<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Guru Test',
            'nip' => '12345678',  // NIP guru
            'password' => Hash::make('guru1234'),  // Password untuk login
            'role' => 'guru',
        ]);
    }
}
