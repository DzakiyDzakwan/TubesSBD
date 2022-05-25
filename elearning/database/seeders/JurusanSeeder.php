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
            'degree'=>'D3'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR007',
            'nama_jurusan'=>'Sastra Indonesia',
            'fakultas_id'=>'FK003',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR008',
            'nama_jurusan'=>'Sastra Jepang',
            'fakultas_id'=>'FK003',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR009',
            'nama_jurusan'=>'Ilmu Komputer',
            'fakultas_id'=>'FK004',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR010',
            'nama_jurusan'=>'Teknologi Informasi',
            'fakultas_id'=>'FK004',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR011',
            'nama_jurusan'=>'Ekonomi Pembangunan',
            'fakultas_id'=>'FK005',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR012',
            'nama_jurusan'=>'Kewirausahaan',
            'fakultas_id'=>'FK005',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR013',
            'nama_jurusan'=>'Akuntansi',
            'fakultas_id'=>'FK005',
            'degree'=>'S1'
        ]);
        
        Jurusan::create([
            'kode_jurusan'=>'JR014',
            'nama_jurusan'=>'Manajemen',
            'fakultas_id'=>'FK005',
            'degree'=>'S1'
        ]);

        Jurusan::create([
            'kode_jurusan'=>'JR015',
            'nama_jurusan'=>'Manajemen Ekstensi',
            'fakultas_id'=>'FK005',
            'degree'=>'S1'
        ]);

        /* Jurusan::factory(4)->create(); */
    }
}
