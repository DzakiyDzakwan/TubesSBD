<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Dosen;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'NIK' => '211402030',
            'email' => 'admin@gmail.com',
            'nomor_hp' => '086969696969',
            'first_name' => 'admin',
            'last_name' => 'admin',
            'jenis_kelamin' => 'pria',
            'agama' => 'admin',
            'kewarganegaraan' => 'WNI',
            'alamat' => 'admin',
            'tgl_lahir' => '1969-01-01',
            'password' => bcrypt('password'), // password
            'status' => 'admin',
            'remember_token' => Str::random(10),
        ]);

        User::factory(6)->create();

    }
}
