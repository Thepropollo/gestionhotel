<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'cliente_id',
        'mesa_id',
        'servicio_id',
        'salon_id',
        'habitacion_id',
        'usuarioempleado_id',
        'fechainicio',
        'fechafin',
        'precio',
    ];

    // Relaciones (opcional)
    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function mesa() {
        return $this->belongsTo(Mesa::class);
    }

    public function servicio() {
        return $this->belongsTo(Servicio::class);
    }

    public function salon() {
        return $this->belongsTo(Salon::class);
    }

    public function habitacion() {
        return $this->belongsTo(Habitacion::class);
    }

    public function usuarioempleado()
    {
        return $this->belongsTo(UsuarioEmpleado::class);
    }
}

