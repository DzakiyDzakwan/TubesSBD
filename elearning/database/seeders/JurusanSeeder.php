<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Fakultas;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Jurusan::create([
            'kode_jurusan'=>'JR001',
            'nama_jurusan'=>'Pendidikan Dokter',
            'fakultas_id'=>'FK001',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR002',
            'nama_jurusan'=>'Biomedika',
            'fakultas_id'=>'FK001',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR003',
            'nama_jurusan'=>'Ilmu Kedokteran',
            'fakultas_id'=>'FK001',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR004',
            'nama_jurusan'=>'Teknik Sipil',
            'fakultas_id'=>'FK002',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR005',
            'nama_jurusan'=>'Teknik Lingkungan',
            'fakultas_id'=>'FK002',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR006',
            'nama_jurusan'=>'Teknik Informatika',
            'fakultas_id'=>'FK002',
            'degree'=>'S1'
        ]);

        Jurusan::factory(4)->create();
    }
}
