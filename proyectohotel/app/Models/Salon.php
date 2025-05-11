<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = ['nombre','numeropiso','capacidadmaxima','descripcion','precio','estado_id','piso_id'];
    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
}
