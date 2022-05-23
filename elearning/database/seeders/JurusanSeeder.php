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
            'kode_jurusan' => '123456',
            'nama_jurusan' => 'JK 000',
            'degree' => 'S3',
            'fakultas_id' => Fakultas::factory()->create()->kode_fakultas
        ]);

        Jurusan::factory(2)->create();
    }
}
