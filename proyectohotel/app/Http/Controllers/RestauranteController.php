<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    /**
     * Listar todos los restaurantes.
     */
    public function index()
    {
        return response()->json(Restaurante::with(['piso', 'estado', 'empleado'])->get());
    }

    /**
     * Crear un nuevo restaurante.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'piso_id' => 'required|exists:pisos,id',
            'estado_id' => 'required|exists:estados,id',
            'empleado_id' => 'required|exists:empleados,id',
            'nombre' => 'required|string|max:255',
            'numerototalmesas' => 'required|integer',
            'numerototalsillas' => 'required|integer',
        ]);

        $restaurante = Restaurante::create($validated);

        return response()->json([
            'message' => 'Restaurante creado exitosamente',
            'data' => $restaurante
        ], 201);
    }

    /**
     * Mostrar un restaurante por ID.
     */
    public function show($id)
    {
        $restaurante = Restaurante::with(['piso', 'estado', 'empleado'])->find($id);

        if (!$restaurante) {
            return response()->json(['message' => 'Restaurante no encontrado'], 404);
        }

        return response()->json($restaurante);
    }

    /**
     * Actualizar un restaurante existente.
     */
    public function update(Request $request, $id)
    {
        $restaurante = Restaurante::find($id);

        if (!$restaurante) {
            return response()->json(['message' => 'Restaurante no encontrado'], 404);
        }

        $validated = $request->validate([
            'piso_id' => 'required|exists:pisos,id',
            'estado_id' => 'required|exists:estados,id',
            'empleado_id' => 'required|exists:empleados,id',
            'nombre' => 'required|string|max:255',
            'numerototalmesas' => 'required|integer',
            'numerototalsillas' => 'required|integer',
        ]);

        $restaurante->update($validated);

        return response()->json([
            'message' => 'Restaurante actualizado correctamente',
            'data' => $restaurante
        ]);
    }

    /**
     * Eliminar un restaurante.
     */
    public function destroy($id)
    {
        $restaurante = Restaurante::find($id);

        if (!$restaurante) {
            return response()->json(['message' => 'Restaurante no encontrado'], 404);
        }

        $restaurante->delete();

        return response()->json(['message' => 'Restaurante eliminado correctamente']);
    }
}
