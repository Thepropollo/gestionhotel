<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'empleado_id' => 'required|exists:empleados,id',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $usuario = User::create($validated);

        return response()->json($usuario, 201);
    }
    public function index()
    {
        return response()->json(User::with('empleado')->get(), 200);


    }
}
