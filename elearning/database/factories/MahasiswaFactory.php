<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'NIM' => $this->faker->numerify('#########'),
            // 'NISN' => $this->faker->numerify('#########'),
            // 'semester' => $this->faker->randomDigitNotNull(),
            // 'program' => $this->faker->company(2),
            // 'angkatan' => $this->faker->year(),
            // 'status_keaktifan' => $this->faker->randomElement(['aktif', 'tidak_aktif']),
            // 'user_id' => $this->faker->randomDigitNotNull(),
            // 'jurusan' => $this->faker->company()
        ];
    }
}
