<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Listar todos los roles.
     */
    public function index()
    {
        return response()->json(Rol::all());
    }

    /**
     * Crear un nuevo rol.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombrerol' => 'required|string|max:100|unique:rols,nombrerol',
            'descripcion' => 'nullable|string|max:255',
        ]);

        $rol = Rol::create($validated);

        return response()->json([
            'message' => 'Rol creado exitosamente',
            'data' => $rol
        ], 201);
    }

    /**
     * Mostrar un rol por ID.
     */
    public function show($id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        return response()->json($rol);
    }

    /**
     * Actualizar un rol existente.
     */
    public function update(Request $request, $id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombrerol' => 'required|string|max:100|unique:rols,nombrerol,' . $rol->id,
            'descripcion' => 'nullable|string|max:255',
        ]);

        $rol->update($validated);

        return response()->json([
            'message' => 'Rol actualizado correctamente',
            'data' => $rol
        ]);
    }

    /**
     * Eliminar un rol.
     */
    public function destroy($id)
    {
        $rol = Rol::find($id);

        if (!$rol) {
            return response()->json(['message' => 'Rol no encontrado'], 404);
        }

        $rol->delete();

        return response()->json(['message' => 'Rol eliminado correctamente']);
    }
}

