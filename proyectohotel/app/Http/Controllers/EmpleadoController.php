<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Listar todos los empleados.
     */
    public function index()
    {
        return response()->json(Empleado::with(['hotel', 'rol', 'estado'])->get());
    }

    /**
     * Crear un nuevo empleado.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'rols_id' => 'required|exists:rols,id',
            'estado_id' => 'required|exists:estados,id',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:255|unique:empleados,cedula',
            'fechanacimiento' => 'required|date',
            'tiposangre' => 'required|string|max:255',
        ]);

        $empleado = Empleado::create($validated);

        return response()->json([
            'message' => 'Empleado creado exitosamente',
            'data' => $empleado
        ], 201);
    }

    /**
     * Mostrar un empleado por ID.
     */
    public function show($id)
    {
        $empleado = Empleado::with(['hotel', 'rol', 'estado'])->find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        return response()->json($empleado);
    }

    /**
     * Actualizar un empleado existente.
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        $validated = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'rols_id' => 'required|exists:rols,id',
            'estado_id' => 'required|exists:estados,id',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'cedula' => 'required|string|max:255|unique:empleados,cedula,' . $empleado->id,
            'fechanacimiento' => 'required|date',
            'tiposangre' => 'required|string|max:255',
        ]);

        $empleado->update($validated);

        return response()->json([
            'message' => 'Empleado actualizado correctamente',
            'data' => $empleado
        ]);
    }

    /**
     * Eliminar un empleado.
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        $empleado->delete();

        return response()->json(['message' => 'Empleado eliminado correctamente']);
    }
}
