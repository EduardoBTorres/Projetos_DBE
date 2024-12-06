<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class BicicletaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "marca" => fake()->text(30),
            "modelo" => fake()->sentence(10),
            "aro" => fake()->randomFloat(2, 100, 10000),
            "cor" => fake()->text(30),
        ];
    }
}
