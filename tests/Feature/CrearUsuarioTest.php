<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class CrearUsuarioTest extends TestCase
{
    use RefreshDatabase;

    public function test_crear_usuario()
    {
        // Crear un hotel
        $hotel = \App\Models\Hotel::factory()->create();

        // Crear un empleado asociado a ese hotel
        $empleado = \App\Models\Empleado::factory()->create([
            'hotel_id' => $hotel->id,
        ]);

        // Ahora creamos el usuario asociado a ese empleado
        $response = $this->postJson('/api/usuarios', [
            'name' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'password' => 'secreto123',
            'empleado_id' => $empleado->id,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', [
            'email' => 'juan@example.com',
            'empleado_id' => $empleado->id,
        ]);
    }
}


