<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return response()->json($mesas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'restaurante_id' => 'required|exists:restaurantes,id',
            'estado_id' => 'required|exists:estados,id',
            'numeromesa' => 'required|string|max:255',
            'ubication' => 'required|string|max:255',
            'capacidad' => 'required|integer',
            'descripcion' => 'required|string|max:255',
        ]);

        $mesa = Mesa::create($validated);

        return response()->json([
            'message' => 'Mesa creada exitosamente',
            'data' => $mesa
        ]);
    }

    public function show($id)
    {
        $mesa = Mesa::find($id);

        if (!$mesa) {
            return response()->json(['message' => 'Mesa no encontrada'], 404);
        }

        return response()->json($mesa);
    }

    public function update(Request $request, $id)
    {
        $mesa = Mesa::find($id);

        if (!$mesa) {
            return response()->json(['message' => 'Mesa no encontrada'], 404);
        }

        $validated = $request->validate([
            'restaurante_id' => 'required|exists:restaurantes,id',
            'estado_id' => 'required|exists:estados,id',
            'numeromesa' => 'required|string|max:255',
            'ubication' => 'required|string|max:255',
            'capacidad' => 'required|integer',
            'descripcion' => 'required|string|max:255',
        ]);

        $mesa->update($validated);

        return response()->json([
            'message' => 'Mesa actualizada exitosamente',
            'data' => $mesa
        ]);
    }

    public function destroy($id)
    {
        $mesa = Mesa::find($id);

        if (!$mesa) {
            return response()->json(['message' => 'Mesa no encontrada'], 404);
        }

        $mesa->delete();

        return response()->json(['message' => 'Mesa eliminada exitosamente']);
    }
}

