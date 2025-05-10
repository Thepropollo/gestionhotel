<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['nombre_estado','descripcion'];
    public function empleados(){
        return $this->hasMany(Empleado::class);
    }
    public function restaurantes(){
        return $this->belongsTo(Restaurante::class);
    }
    public function salones(){
        return $this->belongsTo(Hotel::class);
    }
}
