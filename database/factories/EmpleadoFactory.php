<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;
use App\Models\Rol;
use App\Models\Estado;

class EmpleadoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'hotel_id' => Hotel::factory(),
            'rols_id' => Rol::factory(),
            'estado_id' => Estado::factory(),
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'cedula' => $this->faker->unique()->numerify('########'),
            'fechanacimiento' => $this->faker->date('Y-m-d'),
            'tiposangre' => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
            'correo' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
