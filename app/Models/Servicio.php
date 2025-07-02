<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'estado_id'
    ];


    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

}
