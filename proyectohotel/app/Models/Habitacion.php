<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $fillable = ['numero_habitacion','capacidad','numero_piso','precio_noche','fecha_agendada','estado_id','piso_id'];
    public function reserva(){
        return $this->belongsTo(Reserva::class);
    }
}
