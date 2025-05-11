<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['cedula','nombre','apellido','direccion','telefono'];
    public function reserva(){
        return $this->hasMany(Reserva::class);
    }
    public function factura(){
        return $this->hasMany(Factura::class);
    }
}
