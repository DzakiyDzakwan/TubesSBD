<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class dosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::pluck('user_id');

        return [
            // 'NIP' => $this->faker->numerify('#########'),
            // 'NIDN' => $this->faker->numerify('#########'),
            // 'tanggal_terdaftar' => $this->faker->date(),
            // 'pendidikan_terakhir' => $this->faker->randomElement(['S2', 'S3', 'S4', 'ST12']),
            // 'status_keaktifan' => $this->faker->randomElement(['Aktif', 'Tidak Aktif']),
            // 'user_id' => $this->faker->randomElement($user),
        ];
    }
}
