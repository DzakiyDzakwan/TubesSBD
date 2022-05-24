<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Fakultas::create([
            'kode_fakultas'=>'FK001',
            'nama_fakultas'=>'Kedokteran',
            'dekan'=>NULL
        ]);

        Fakultas::create([
            'kode_fakultas'=>'FK002',
            'nama_fakultas'=>'Teknik',
            'dekan'=>'210293001'
        ]);

        Fakultas::factory(2)->create();
    }
}
