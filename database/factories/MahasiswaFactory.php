<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
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
            'username' => fake()->sentence(1),
            'password' => fake()->sentence(2),
        ];
    }
}
