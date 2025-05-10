<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['cedula','nombre','apellido','tiposangre', 'fechanacimiento','hotel_id','rol_id', 'estado_id'];
    public function hotels(){
        return $this->belongsTo(Hotel::class);
    }
    public function restaurantes(){
        return $this->belongsTo(Restaurante::class);
    }
}
