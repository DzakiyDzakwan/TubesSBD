<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mata_kuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK001',
            'nama_matkul'=>'Ilmu Pendidikan Dokter',
            'sks'=>'3',
            'jurusan'=>'JR001'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK002',
            'nama_matkul'=>'Dasar Dasar Pendidikan Dokter',
            'sks'=>'2',
            'jurusan'=>'JR001'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK003',
            'nama_matkul'=>'Ilmu Biomedika',
            'sks'=>'3',
            'jurusan'=>'JR002'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK004',
            'nama_matkul'=>'Dasar Dasar Biomedika',
            'sks'=>'3',
            'jurusan'=>'JR002'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK005',
            'nama_matkul'=>'Dasar Dasar Kedokteran',
            'sks'=>'2',
            'jurusan'=>'JR003'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK006',
            'nama_matkul'=>'Biologi Lanjutan',
            'sks'=>'2',
            'jurusan'=>'JR003'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK007',
            'nama_matkul'=>'Dasar Dasar Teknik Sipil',
            'sks'=>'2',
            'jurusan'=>'JR004'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK008',
            'nama_matkul'=>'Pengantar Teknik Sipil',
            'sks'=>'2',
            'jurusan'=>'JR004'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK009',
            'nama_matkul'=>'Dasar Dasar Teknik Lingkungan',
            'sks'=>'2',
            'jurusan'=>'JR005'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK010',
            'nama_matkul'=>'Pengantar Teknik Lingkungan',
            'sks'=>'2',
            'jurusan'=>'JR005'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK011',
            'nama_matkul'=>'Web Basic',
            'sks'=>'3',
            'jurusan'=>'JR006'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK012',
            'nama_matkul'=>'Web Basic',
            'sks'=>'3',
            'jurusan'=>'JR006'
        ]);

        Mata_kuliah::create([
            'kode_mata_kuliah'=>'MK013',
            'nama_matkul'=>'Dasar Dasar Pemrograman',
            'sks'=>'3',
            'jurusan'=>'JR006'
        ]);

        Mata_kuliah::factory(8)->create();
    }
}
