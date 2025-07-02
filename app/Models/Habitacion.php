<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{

    protected $fillable = [
        
        'numerohabitacion',
        'capacidadmaxima',
        'descripcion',
        'numeropiso',
        'precio',
        'fechaagenda',
        'piso_id',
        'estado_id',
    ];

    public function piso()
    {
        return $this->belongsTo(Piso::class);
    }

    public function hotels()
    {
        return $this->belongsTo(Hotel::class);
    }
    
    public function estados()
    {
        return $this->HasMany(Estado::class);
    }
}

