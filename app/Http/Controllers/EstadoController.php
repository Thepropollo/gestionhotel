<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Listar todos los estados.
     */
    public function index()
    {
        return response()->json(Estado::all());
    }

    /**
     * Crear un nuevo estado.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombreestado' => 'required|string|max:255|unique:estados,nombreestado',
            'descripcion' => 'required|string|max:255',
        ]);

        $estado = Estado::create($validated);

        return response()->json([
            'message' => 'Estado creado exitosamente',
            'data' => $estado
        ], 201);
    }

    /**
     * Mostrar un estado por ID.
     */
    public function show($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }

        return response()->json($estado);
    }

    /**
     * Actualizar un estado existente.
     */
    public function update(Request $request, $id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombreestado' => 'required|string|max:255|unique:estados,nombreestado,' . $estado->id,
            'descripcion' => 'required|string|max:255',
        ]);

        $estado->update($validated);

        return response()->json([
            'message' => 'Estado actualizado correctamente',
            'data' => $estado
        ]);
    }

    /**
     * Eliminar un estado.
     */
    public function destroy($id)
    {
        $estado = Estado::find($id);

        if (!$estado) {
            return response()->json(['message' => 'Estado no encontrado'], 404);
        }

        $estado->delete();

        return response()->json(['message' => 'Estado eliminado correctamente']);
    }
}
