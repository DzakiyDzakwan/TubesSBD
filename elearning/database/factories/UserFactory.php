<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // // 'email_verified_at' => now(),
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // // 'remember_token' => Str::random(10),
            // 'NIK' => $this->faker->nik(),
            // 'first_name' => $this->faker->firstName(),
            // 'last_name' => $this->faker->lastName(),
            // 'jenis_kelamin' => $this->faker->randomElement(['pria', 'wanita']),
            // 'agama' => $this->faker->randomElement(['kristen', 'katolik']),
            // 'kewarganegaraan' => $this->faker->randomElement(['indonesia', 'luar_negeri']),
            // 'nomor_hp' => $this->faker->phoneNumber(),
            // 'tanggal_lahir' => $this->faker->date(),
            // 'alamat_domisili' => $this->faker->address()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
