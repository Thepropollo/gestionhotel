<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = ['monto','detalle_factura','hotel_id','reserva_id','estado_id','cliente_id'];
}
