<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = ['total','detalle','hotel_id','reserva_id','estado_id','cliente_id'];
}
