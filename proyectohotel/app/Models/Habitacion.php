<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $fillable = ['numerohabitacion','capacidadmaxima','descripcion','numeropiso','precio','fechaagendada','estado_id','piso_id'];
    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }
}
