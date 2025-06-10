<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

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
        $hotel = \App\Models\Hotel::factory()->create();
        $empleado = \App\Models\Empleado::factory()->create([
            'hotel_id' => $hotel->id,
        ]);
        $user = \App\Models\User::factory()->create([
            'empleado_id' => $empleado->id,
        ]);

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/usuario-protegido');
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'mensaje' => 'Accediste a una ruta protegida'
        ]);
    }
}
