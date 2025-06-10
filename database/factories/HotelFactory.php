<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->company,
            'ciudad' => $this->faker->city,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'totalpisos' => $this->faker->numberBetween(1, 10),
            'correo' => $this->faker->unique()->safeEmail,
            'garaje' => $this->faker->word,
        ];
    }
}
