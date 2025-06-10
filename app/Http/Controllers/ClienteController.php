<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Método para mostrar todos los clientes
    public function index()
    {
        return response()->json(Cliente::all());
    }

    // Método para almacenar un nuevo cliente
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'cedula' => 'required|string|unique:clientes,cedula|max:255',
            'apellido' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        $cliente = Cliente::create($validated);

        return response()->json($cliente, 201);
    }

    // Método para mostrar un cliente por su ID
    public function show($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return response()->json($cliente);
    }

    // Método para actualizar un cliente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'cedula' => 'sometimes|required|string|max:255|unique:clientes,cedula,' . $id,
            'apellido' => 'sometimes|required|string|max:255',
            'direccion' => 'sometimes|required|string|max:255',
            'telefono' => 'sometimes|required|string|max:255',
        ]);

        $cliente->update($validated);

        return response()->json($cliente);
    }

    // Método para eliminar un cliente
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        $cliente->delete();

        return response()->json(['message' => 'Cliente eliminado']);
    }
}
