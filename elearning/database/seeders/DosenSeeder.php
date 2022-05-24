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
            'NIP'=> '210293001',
            'NIDN'=> '210293001',
            'user'=> '2114021232',
            'status'=>'aktif'
            
        ]);

        Dosen::factory(4)->create();
    }
}
