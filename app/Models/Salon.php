<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = [
        'piso_id',
        'estado_id',
        'nombre',
        'numeropiso',
        'capacidadmaxima',
        'descripcion',
        'precio'
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
