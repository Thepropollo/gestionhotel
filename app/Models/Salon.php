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

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function estados()
    {
        return $this->belongsTo(Estado::class);
    }
}
