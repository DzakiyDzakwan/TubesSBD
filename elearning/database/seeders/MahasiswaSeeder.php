<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\Jurusan;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'NIM' => '211002001',
            'NISN' => '1',
            'semester' => '1',
            'program' => 'S1',
            'angkatan' => '2021',
            'status' => 'aktif',
            'user' => '193901001',
            'jurusan' => 'JR001'
        ]);

        Mahasiswa::create([
            'NIM' => '211402002',
            'NISN' => '2',
            'semester' => '1',
            'program' => 'S1',
            'angkatan' => '2021',
            'status' => 'aktif',
            'user' => '193901002',
            'jurusan' => 'JR010'
        ]);

        Mahasiswa::create([
            'NIM' => '211402075',
            'NISN' => '3',
            'semester' => '1',
            'program' => 'S1',
            'angkatan' => '2021',
            'status' => 'aktif',
            'user' => '211402075',
            'jurusan' => 'JR010'
        ]);

        Mahasiswa::create([
            'NIM' => '211402001',
            'NISN' => '4',
            'semester' => '1',
            'program' => 'S1',
            'angkatan' => '2021',
            'status' => 'aktif',
            'user' => '211402001',
            'jurusan' => 'JR010'
        ]);

        /* Mahasiswa::factory(20)->create(); */
    }
}
