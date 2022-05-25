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
            'dosen'=>'210293003',
            'mata_kuliah'=>'MK013'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS002',
            'kelas'=>'KOM A',
            'dosen'=>'210293003',
            'mata_kuliah'=>'MK021'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS003',
            'kelas'=>'KOM A',
            'dosen'=>'210293002',
            'mata_kuliah'=>'MK020'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS004',
            'kelas'=>'KOM B',
            'dosen'=>'210293002',
            'mata_kuliah'=>'MK021'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS005',
            'kelas'=>'KOM A',
            'dosen'=>'210293004',
            'mata_kuliah'=>'MK022'

        ]);

        /* Kelas::factory(16)->create(); */
    }
}
