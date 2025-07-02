<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [
        'detalle',
        'total',
        'metodo_pago',
        'fecha_emision',
        'fecha_vencimiento',
        'numero_factura',
        'codigo_autorizacion',
        'precio_unitario',
        'cantidad',
        'precio_total',
        'reserva_id',
        'hotel_id',
        'cliente_id',
        'estado_id',
    ];

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
        return $this->HasMany(Estado::class);
    }
}
