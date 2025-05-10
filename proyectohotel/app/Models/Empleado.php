<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['cedula','nombre','apellido','tiposangre', 'fechanacimiento','hotel_id','rol_id', 'estado_id'];
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
    public function restaurante(){
        return $this->belongsTo(Restaurante::class);
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
