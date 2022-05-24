<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Kelas::create([

            'kelas_id'=>'KLS001',
            'kelas'=>'KOM A',
            'dosen'=>'210293001',
            'mata_kuliah'=>'MK011'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS002',
            'kelas'=>'KOM A',
            'dosen'=>'210293001',
            'mata_kuliah'=>'MK012'

        ]);

        Kelas::factory(16)->create();
    }
}
