<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absensi>
 */
class AbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'npm' => fake()->randomNumber(8),
            'nama' => fake()->name(),
            'kelas' => fake()->sentence(2),
            'matakuliah' => $this->faker->sentence(3),
            'keterangan' => $this->faker->sentence(3),
        ];
    }
}
