<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre',
        'cedula',
        'apellido',
        'direccion',
        'telefono',
        'estado_id'
    ];

    
    public function reservas(){
        return $this->hasMany(Reserva::class);
    }

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
}
