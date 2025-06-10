<?php

namespace App\Http\Controllers;

use App\Models\Piso;
use App\Models\Hotel;
use Illuminate\Http\Request;

class PisoController extends Controller
{
    /**
     * Display a listing of the pisos.
     */
    public function index()
    {
        // Obtiene todos los pisos con la relación de hotel
        $pisos = Piso::with('hotel')->get();
        return response()->json($pisos);
    }

    /**
     * Store a newly created piso in storage.
     */
    public function store(Request $request)
    {
        // Valida los datos recibidos
        $validated = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'numeropiso' => 'required|integer',
            'numerotoalhabitacion' => 'required|integer',
            'pisorestaurante' => 'required|string|max:255',
            'pisosalon' => 'required|string|max:255',
        ]);

        // Crea un nuevo piso
        $piso = Piso::create($validated);

        return response()->json([
            'message' => 'Piso creado con éxito',
            'data' => $piso
        ], 201);
    }

    /**
     * Display the specified piso.
     */
    public function show($id)
    {
        // Busca el piso por su ID
        $piso = Piso::with('hotel')->find($id);

        if (!$piso) {
            return response()->json(['message' => 'Piso no encontrado'], 404);
        }

        return response()->json($piso);
    }

    /**
     * Update the specified piso in storage.
     */
    public function update(Request $request, $id)
    {
        // Valida los datos recibidos
        $validated = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'numeropiso' => 'required|integer',
            'numerotoalhabitacion' => 'required|integer',
            'pisorestaurante' => 'required|string|max:255',
            'pisosalon' => 'required|string|max:255',
        ]);

        // Encuentra el piso por su ID
        $piso = Piso::find($id);

        if (!$piso) {
            return response()->json(['message' => 'Piso no encontrado'], 404);
        }

        // Actualiza el piso con los datos validados
        $piso->update($validated);

        return response()->json([
            'message' => 'Piso actualizado con éxito',
            'data' => $piso
        ]);
    }

    /**
     * Remove the specified piso from storage.
     */
    public function destroy($id)
    {
        // Encuentra el piso por su ID
        $piso = Piso::find($id);

        if (!$piso) {
            return response()->json(['message' => 'Piso no encontrado'], 404);
        }

        // Elimina el piso
        $piso->delete();

        return response()->json(['message' => 'Piso eliminado con éxito']);
    }
}
