<?php

namespace Database\Factories;

use App\Models\Bicicleta;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BicicletaFactory extends Factory
{
    protected $model = Bicicleta::class;

    public function definition(): array
    {
        return [
            'marca' => $this->faker->word(),
            'modelo' => $this->faker->sentence(),
            'aro' => $this->faker->randomNumber(2),
            'cor' => $this->faker->colorName(),
            'user_id' => User::factory(),  // Associa uma bicicleta a um usuário
        ];
    }
}
