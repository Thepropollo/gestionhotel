<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $fillable = ['numeropiso', 'pisorestaurante', 'pisosalon', 'numerotoalhabitacion', 'hotel_id'];

    public function restaurante()
    {
        return $this->hasOne(Restaurante::class);
    }

    // Relación uno a muchos con Habitaciones
    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class);
    }

    // Relación uno a muchos con Salones
    public function salones()
    {
        return $this->hasMany(Salon::class);
    }

    // Relación pertenece a un Hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}