<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['numeromesa','ubicacion','capacidad','descripcion','restaurante_id','estado_id'];
    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
}
