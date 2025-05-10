<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['fecha_inicio','fecha_fin','monto',
    'cliente_id','mesa_id','salon_id','habitacion_id','servicio_id','usuario_id'];



}
