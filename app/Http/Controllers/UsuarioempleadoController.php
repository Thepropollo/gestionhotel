<?php

namespace App\Http\Controllers;

use App\Models\Usuarioempleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioempleadoController extends Controller
{
    public function index()
    {
        return Usuarioempleado::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'correo' => 'required|email|unique:usuarioempleados,correo',
            'password' => 'required|string|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        return Usuarioempleado::create($validated);
    }

    public function show($id)
    {
        return Usuarioempleado::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuarioempleado::findOrFail($id);

        $validated = $request->validate([
            'empleado_id' => 'required|exists:empleados,id',
            'correo' => 'required|email|unique:usuarioempleados,correo,' . $id,
            'password' => 'nullable|string|min:6'
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $usuario->update($validated);
        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuarioempleado::findOrFail($id);
        $usuario->delete();
        return response()->json(['message' => 'Usuario eliminado correctamente']);
    }
}
