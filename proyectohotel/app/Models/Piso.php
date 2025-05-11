<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $fillable = ['numero_del_piso','piso_restaurante','piso_salon','numero_total_habitacion','hotel_id'];
    public function restaurante(){
        return $this->hasOne(Restaurante::class);
    }
    public function habitaciones(){
        return $this->hasMany(Habitacion::class);
    }
    public function salones(){
        return $this->hasMany(Salon::class);
    }
}
