<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PisoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\UsuarioempleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// hotels api

Route::get('/hotels', [HotelController::class, 'index']); // Listar todos los hoteles
Route::post('/hotels', [HotelController::class, 'store']); // Crear un nuevo hotel
Route::get('/hotels/{id}', [HotelController::class, 'show']); // Mostrar un hotel específico
Route::put('/hotels/{id}', [HotelController::class, 'update']); // Actualizar un hotel específico
Route::delete('/hotels/{id}', [HotelController::class, 'destroy']); // Eliminar un hotel específico

// pisos api
Route::get('/pisos', [PisoController::class, 'index']);
Route::post('/pisos', [PisoController::class, 'store']);
Route::get('/pisos/{id}', [PisoController::class, 'show']);
Route::put('/pisos/{id}', [PisoController::class, 'update']);
Route::delete('/pisos/{id}', [PisoController::class, 'destroy']);
// rols api
Route::get('/rols', [RolController::class, 'index']);
Route::post('/rols', [RolController::class, 'store']);
Route::get('/rols/{id}', [RolController::class, 'show']);
Route::put('/rols/{id}', [RolController::class, 'update']);
Route::delete('/rols/{id}', [RolController::class, 'destroy']);
// estados api
Route::get('/estados', [EstadoController::class, 'index']);
Route::post('/estados', [EstadoController::class, 'store']);
Route::get('/estados/{id}', [EstadoController::class, 'show']);
Route::put('/estados/{id}', [EstadoController::class, 'update']);
Route::delete('/estados/{id}', [EstadoController::class, 'destroy']);
// empleados api
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::post('/empleados', [EmpleadoController::class, 'store']);
Route::get('/empleados/{id}', [EmpleadoController::class, 'show']);
Route::put('/empleados/{id}', [EmpleadoController::class, 'update']);
Route::delete('/empleados/{id}', [EmpleadoController::class, 'destroy']);
// restaurantes api
Route::get('/restaurantes', [RestauranteController::class, 'index']);
Route::post('/restaurantes', [RestauranteController::class, 'store']);
Route::get('/restaurantes/{id}', [RestauranteController::class, 'show']);
Route::put('/restaurantes/{id}', [RestauranteController::class, 'update']);
Route::delete('/restaurantes/{id}', [RestauranteController::class, 'destroy']);
// mesas api
Route::get('/mesas', [MesaController::class, 'index']);
Route::post('/mesas', [MesaController::class, 'store']);
Route::get('/mesas/{id}', [MesaController::class, 'show']);
Route::put('/mesas/{id}', [MesaController::class, 'update']);
Route::delete('/mesas/{id}', [MesaController::class, 'destroy']);
// salones api
Route::get('/salones', [SalonController::class, 'index']);
Route::post('/salones', [SalonController::class, 'store']);
Route::get('/salones/{id}', [SalonController::class, 'show']);
Route::put('/salones/{id}', [SalonController::class, 'update']);
Route::delete('/salones/{id}', [SalonController::class, 'destroy']);
// habitaciones api
Route::get('/habitaciones', [HabitacionController::class, 'index']);
Route::post('/habitaciones', [HabitacionController::class, 'store']);
Route::get('/habitaciones/{id}', [HabitacionController::class, 'show']);
Route::put('/habitaciones/{id}', [HabitacionController::class, 'update']);
Route::delete('/habitaciones/{id}', [HabitacionController::class, 'destroy']);
// usuarioempleado api
Route::get('/usuarioempleados', [UsuarioempleadoController::class, 'index']);
Route::post('/usuarioempleados', [UsuarioempleadoController::class, 'store']);
Route::get('/usuarioempleados/{id}', [UsuarioempleadoController::class, 'show']);
Route::put('/usuarioempleados/{id}', [UsuarioempleadoController::class, 'update']);
Route::delete('/usuarioempleados/{id}', [UsuarioempleadoController::class, 'destroy']);
// clientes api
Route::get('/clientes', [ClienteController::class, 'index']);
Route::post('/clientes', [ClienteController::class, 'store']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::put('/clientes/{id}', [ClienteController::class, 'update']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);
// servicios api
Route::get('/servicios', [ServicioController::class, 'index']);
Route::post('/servicios', [ServicioController::class, 'store']);
Route::get('/servicios/{id}', [ServicioController::class, 'show']);
Route::put('/servicios/{id}', [ServicioController::class, 'update']);
Route::delete('/servicios/{id}', [ServicioController::class, 'destroy']);
// reservas api
Route::get('/reservas', [ReservaController::class, 'index']);
Route::post('/reservas', [ReservaController::class, 'store']);
Route::get('/reservas/{id}', [ReservaController::class, 'show']);
Route::put('/reservas/{id}', [ReservaController::class, 'update']);
Route::delete('/reservas/{id}', [ReservaController::class, 'destroy']);
// facturas api
Route::get('/facturas', [FacturaController::class, 'index']);
Route::post('/facturas', [FacturaController::class, 'store']);
Route::get('/facturas/{id}', [FacturaController::class, 'show']);
Route::put('/facturas/{id}', [FacturaController::class, 'update']);
Route::delete('/facturas/{id}', [FacturaController::class, 'destroy']);

use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/usuario-protegido', function (Request $request) {
    return response()->json([
        'mensaje' => 'Accediste a una ruta protegida',
        'usuario' => $request->user(),
    ]);
});

Route::post('/login', [AuthController::class, 'login']);

use App\Http\Controllers\API\UsuarioController;

Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::get('/usuarios', [UsuarioController::class, 'index']);

