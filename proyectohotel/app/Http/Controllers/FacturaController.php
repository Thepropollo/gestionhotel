<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        return Factura::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reserva_id' => 'required|exists:reservas,id',
            'hotel_id' => 'required|exists:hotels,id',
            'cliente_id' => 'required|exists:clientes,id',
            'estado_id' => 'required|exists:estados,id',
            'detalle' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        $factura = Factura::create($validated);
        return response()->json($factura, 201);
    }

    public function show($id)
    {
        $factura = Factura::findOrFail($id);
        return response()->json($factura);
    }

    public function update(Request $request, $id)
    {
        $factura = Factura::findOrFail($id);

        $validated = $request->validate([
            'reserva_id' => 'sometimes|exists:reservas,id',
            'hotel_id' => 'sometimes|exists:hotels,id',
            'cliente_id' => 'sometimes|exists:clientes,id',
            'estado_id' => 'sometimes|exists:estados,id',
            'detalle' => 'sometimes|string|max:255',
            'total' => 'sometimes|numeric',
        ]);

        $factura->update($validated);
        return response()->json($factura);
    }

    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();
        return response()->json(null, 204);
    }
}
