<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;


use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['correo', 'contraseña', 'empleado_id'];
}

