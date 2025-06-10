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

    public function estado() {
        return $this->belongsTo(Estado::class);
    }
}

