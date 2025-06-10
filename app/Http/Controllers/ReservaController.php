<?php

namespace App\Http\Controllers;

use App\Models\Reserva;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        return Reserva::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'mesa_id' => 'required|exists:mesas,id',
            'servicio_id' => 'required|exists:servicios,id',
            'salon_id' => 'required|exists:salons,id',
            'habitacion_id' => 'required|exists:habitacions,id',
            'usuarioempleado_id' => 'required|exists:usuarioempleados,id',
            'fechainicio' => 'required|date',
            'fechafin' => 'required|date|after_or_equal:fechainicio',
            'precio' => 'required|numeric',
        ]);

        $reserva = Reserva::create($validated);
        return response()->json($reserva, 201);
    }

    public function show($id)
    {
        $reserva = Reserva::findOrFail($id);
        return response()->json($reserva);
    }

    public function update(Request $request, $id)
    {
        $reserva = Reserva::findOrFail($id);

        $validated = $request->validate([
            'cliente_id' => 'sometimes|exists:clientes,id',
            'mesa_id' => 'sometimes|exists:mesas,id',
            'servicio_id' => 'sometimes|exists:servicios,id',
            'salon_id' => 'sometimes|exists:salons,id',
            'habitacion_id' => 'sometimes|exists:habitacions,id',
            'usuarioempleado_id' => 'sometimes|exists:usuarioempleados,id',
            'fechainicio' => 'sometimes|date',
            'fechafin' => 'sometimes|date|after_or_equal:fechainicio',
            'precio' => 'sometimes|numeric',
        ]);

        $reserva->update($validated);
        return response()->json($reserva);
    }

    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);
        $reserva->delete();
        return response()->json(null, 204);
    }
}
