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
            'nomor_hp' => '08696124249',
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

        User::create([
            'NIK' => '211402012',
            'email' => 'siswa@gmail.com',
            'nomor_hp' => '086969123123',
            'first_name' => 'siswa',
            'last_name' => 'siswa',
            'jenis_kelamin' => 'pria',
            'agama' => 'siswa',
            'kewarganegaraan' => 'WNI',
            'alamat' => 'siswa',
            'tgl_lahir' => '1969-01-01',
            'password' => bcrypt('password'), // password
            'status' => 'siswa',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'NIK' => '2114021232',
            'email' => 'guru@gmail.com',
            'nomor_hp' => '086969696969',
            'first_name' => 'guru',
            'last_name' => 'guru',
            'jenis_kelamin' => 'pria',
            'agama' => 'guru',
            'kewarganegaraan' => 'WNI',
            'alamat' => 'guru',
            'tgl_lahir' => '1969-01-01',
            'password' => bcrypt('password'), // password
            'status' => 'guru',
            'remember_token' => Str::random(10),
        ]);

        User::factory(6)->create();

    }
}
