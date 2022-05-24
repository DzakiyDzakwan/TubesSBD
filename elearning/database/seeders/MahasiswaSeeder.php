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
            'NIM' => '2',
            'NISN' => '2',
            'semester' => '69',
            'program' => 'S3',
            'angkatan' => '1969',
            'status' => 'aktif',
            'user' => '211402012',
            'jurusan' => Jurusan::factory()->create()->kode_jurusan
        ]);

        Mahasiswa::factory(20)->create();
    }
}
