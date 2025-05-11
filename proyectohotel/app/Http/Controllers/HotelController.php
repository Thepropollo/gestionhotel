<?php

namespace App\Http\Controllers;

use App\Models\Hotel;

use Illuminate\Http\Request;

class HotelController extends Controller

{
    public function index()
    {
        return Hotel::all();
    }

    // Crear un nuevo hotel
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciuddad' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'num_habitaciones' => 'required|integer',
            'correo' => 'required|email|max:255',
            'garaje' => 'required|string|max:100'
        ]);

        return Hotel::create($request->all());
    }

    // Mostrar un hotel específico
    public function show($id)
    {
        return Hotel::findOrFail($id);
    }

    // Actualizar un hotel
    public function update(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->update($request->all());

        return $hotel;
    }

    // Eliminar un hotel
    public function destroy($id)
    {
        $hotel = Hotel::findOrFail($id);
        return $hotel->delete();
    }
}
