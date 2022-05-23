<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dosen::create([
            'NIP' => '1',
            'NIDN'=> '1',
            'status' => 'aktif',
            'user' => '2114021232'
        ]);

        Dosen::factory(3)->create();
    }
}
