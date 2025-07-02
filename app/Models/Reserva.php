<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    // Campos asignables masivamente
    protected $fillable = [
        'fechainicio',
        'fechafin',
        'cliente_id',
        'servicio_id',
        'mesa_id',
        'salon_id',
        'habitacion_id',
        'user_id',
        'estado_id',
        'objetos',

    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function mesa()
    {
        return $this->hasMany(Mesa::class);
    }

    public function servicio()
    {
        return $this->hasMany(Servicio::class);
    }

    public function salon()
    {
        return $this->hasMany(Salon::class);
    }

    public function habitacion()
    {
        return $this->hasMany(Habitacion::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estado() {
        return $this->belongsTo(Estado::class);
    }
}
