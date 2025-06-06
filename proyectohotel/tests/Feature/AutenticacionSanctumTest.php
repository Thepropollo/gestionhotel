<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use App\Models\User;

class AutenticacionSanctumTest extends TestCase
{
    use RefreshDatabase;

    public function test_acceso_sin_token()
    {
        $response = $this->getJson('/api/usuario-protegido');
        $response->assertStatus(401);
    }

    public function test_acceso_con_token()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/usuario-protegido');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'mensaje' => 'Accediste a una ruta protegida'
        ]);
    }
}
