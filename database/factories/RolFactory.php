<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RolFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombrerol' => $this->faker->randomElement(['administrador', 'recepcionista', 'limpieza', 'mantenimiento']),
            'descripcion' => $this->faker->sentence(4),
        ];
    }
}
