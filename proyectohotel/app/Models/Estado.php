<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['nombre_estado','descripcion'];
    public function empleado(){
        return $this->hasMany(Empleado::class);
    }
    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }
    public function salon(){
        return $this->belongsTo(Salon::class);
    }
    public function mesa(){
        return $this->hasMany(Mesa::class);
    }
    public function habitacion(){
        return $this->hasMany(Habitacion::class);
    }
    public function factura(){
        return $this->hasMany(Factura::class);
    }
}
