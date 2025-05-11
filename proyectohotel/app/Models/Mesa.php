<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['numero_mesa','ubicacion','capacidad','descripcion','fecha_agendada','restaurante_id','estado_id'];
    public function reserva(){
        return $this->hasMany(Reserva::class);
    }
}
