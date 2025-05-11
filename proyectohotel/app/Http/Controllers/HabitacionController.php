<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index()
    {
        return Habitacion::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'piso_id' => 'required|exists:pisos,id',
            'estado_id' => 'required|exists:estados,id',
            'numerohabitacion' => 'required|integer',
            'capacidadmaxima' => 'required|integer',
            'descripcion' => 'required|string|max:255',
            'numeropiso' => 'required|integer',
            'precio' => 'required|numeric',
            'fechaagenda' => 'required|date'
        ]);

        return Habitacion::create($validated);
    }

    public function show($id)
    {
        return Habitacion::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $habitacion = Habitacion::findOrFail($id);

        $validated = $request->validate([
            'piso_id' => 'required|exists:pisos,id',
            'estado_id' => 'required|exists:estados,id',
            'numerohabitacion' => 'required|integer',
            'capacidadmaxima' => 'required|integer',
            'descripcion' => 'required|string|max:255',
            'numeropiso' => 'required|integer',
            'precio' => 'required|numeric',
            'fechaagenda' => 'required|date'
        ]);

        $habitacion->update($validated);
        return $habitacion;
    }

    public function destroy($id)
    {
        $habitacion = Habitacion::findOrFail($id);
        $habitacion->delete();
        return response()->json(['message' => 'Habitación eliminada correctamente']);
    }
}

