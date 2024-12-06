<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class AtividaesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titulo" => fake()->text(30),
            "endereco" => fake()->sentence(10),
            "distancia" => fake()->randomFloat(2, 100, 10000),
            "tempo" => fake()->randomNumber(3, false),
            "data" => fake()->numberBetween(0, 1),
        ];
    }
}
