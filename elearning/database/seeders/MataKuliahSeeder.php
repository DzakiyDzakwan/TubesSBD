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
        Mata_kuliah::factory(8)->create();
    }
}
