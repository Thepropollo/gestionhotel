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
        $response = $this->postJson('/api/usuarios', [
            'name' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'password' => 'secreto123'
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', [
            'email' => 'juan@example.com'
        ]);
    }
}


