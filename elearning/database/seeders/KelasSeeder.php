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

        Kelas::create([

            'kelas_id'=>'KLS006',
            'kelas'=>'KOM C',
            'dosen'=>'190481502',
            'mata_kuliah'=>'MK023'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS007',
            'kelas'=>'KOM A',
            'dosen'=>'190481505',
            'mata_kuliah'=>'MK024'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS008',
            'kelas'=>'KOM C',
            'dosen'=>'190481507',
            'mata_kuliah'=>'MK025'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS009',
            'kelas'=>'KOM C',
            'dosen'=>'190481507',
            'mata_kuliah'=>'MK026'

        ]);

        Kelas::create([

            'kelas_id'=>'KLS010',
            'kelas'=>'KOM A',
            'dosen'=>'190481502',
            'mata_kuliah'=>'MK026'

        ]);

        /* Kelas::factory(16)->create(); */
    }
}
