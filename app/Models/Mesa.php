<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{

    protected $fillable = [
        'restaurante_id', 
        'estado_id', 
        'numeromesa', 
        'ubication', 
        'capacidad', 
        'descripcion'
    ];

    public function restaurante() {
        return $this->belongsTo(Restaurante::class);
    }

    public function reservas() {
        return $this->hasMany(Reserva::class);
    }

    public function estados() {
        return $this->HasMany(Estado::class);
    }
}

