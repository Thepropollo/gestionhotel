<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['cedula','nombre','apellido','tiposangre', 'fechanacimiento','hotel_id','rol_id', 'estado_id'];
}
