<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\dosen;
use App\Models\Mahasiswa;
use App\Models\fakultas;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        dosen::factory(5)->create();
        fakultas::factory(5)->create();


        // Mahasiswa::factory(5)->create();
    }
}
