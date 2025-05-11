<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index()
    {
        return Salon::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'piso_id' => 'required|exists:pisos,id',
            'estado_id' => 'required|exists:estados,id',
            'nombre' => 'required|string|max:255',
            'numeropiso' => 'required|integer',
            'capacidadmaxima' => 'required|integer',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric',
        ]);

        return Salon::create($validated);
    }

    public function show($id)
    {
        return Salon::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $salon = Salon::findOrFail($id);

        $validated = $request->validate([
            'piso_id' => 'required|exists:pisos,id',
            'estado_id' => 'required|exists:estados,id',
            'nombre' => 'required|string|max:255',
            'numeropiso' => 'required|integer',
            'capacidadmaxima' => 'required|integer',
            'descripcion' => 'required|string|max:255',
            'precio' => 'required|numeric',
        ]);

        $salon->update($validated);
        return $salon;
    }

    public function destroy($id)
    {
        $salon = Salon::findOrFail($id);
        $salon->delete();
        return response()->json(['message' => 'Salón eliminado con éxito.']);
    }
}
