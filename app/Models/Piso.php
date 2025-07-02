<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $fillable = [
    'numeropiso',
    'pisorestaurante',
    'pisosalon',
    'numerotoalhabitacion',
    'hotel_id',
    'estado_id'
];

    public function restaurante()
    {
        return $this->hasMany(Restaurante::class);
    }

    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class);
    }

    public function salones()
    {
        return $this->hasMany(Salon::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    // Relación pertenece a un Hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}