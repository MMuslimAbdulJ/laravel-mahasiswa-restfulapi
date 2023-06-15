<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nim' => '217200035',
            'nama' => 'Muhammad Muslim Abdul Jabbaar',
            'fakultas' => 'Teknik',
            'prodi' => 'Teknik Informatika'
        ]);
        Mahasiswa::create([
            'nim' => '217200036',
            'nama' => 'M Husni Ramadhan',
            'fakultas' => 'Teknik',
            'prodi' => 'Teknik Informatika'
        ]);
        Mahasiswa::create([
            'nim' => '217200098',
            'nama' => 'Uzumaki Naruto',
            'fakultas' => 'Ekonomi',
            'prodi' => 'Akuntansi'
        ]);
        Mahasiswa::create([
            'nim' => '217200076',
            'nama' => 'Eren Yeager',
            'fakultas' => 'Ilmu Komunikasi',
            'prodi' => 'Ilmu Komunikasi'
        ]);
    }
}
