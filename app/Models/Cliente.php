<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['cedula','nombre','apellido','direccion','telefono'];
    public function reservas(){
        return $this->hasMany(Reserva::class);
    }
    public function facturas(){
        return $this->hasMany(Factura::class);
    }
}
