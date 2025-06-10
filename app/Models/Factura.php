<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [
        'reserva_id',
        'hotel_id',
        'cliente_id',
        'estado_id',
        'detalle',
        'total',
    ];

    // Relaciones (opcional)
    public function reserva() {
        return $this->belongsTo(Reserva::class);
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function estado() {
        return $this->belongsTo(Estado::class);
    }
}
