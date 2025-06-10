<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{

    protected $fillable = [
        'piso_id',
        'estado_id',
        'numerohabitacion',
        'capacidadmaxima',
        'descripcion',
        'numeropiso',
        'precio',
        'fechaagenda'
    ];

    public function piso()
    {
        return $this->belongsTo(Piso::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}

