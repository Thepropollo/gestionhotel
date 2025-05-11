<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PisoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EstadoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// hotels api
Route::get('/hotels', [HotelController::class, 'index']);
Route::post('/hotels', [HotelController::class, 'store']);
Route::get('/hotels/{id}', [HotelController::class, 'show']);
Route::put('/hotels/{id}', [HotelController::class, 'update']);
Route::delete('/hotels/{id}', [HotelController::class, 'destroy']);
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
// habitaciones api