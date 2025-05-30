<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'hotel_id', 'rols_id', 'estado_id', 'nombre', 'apellido', 'cedula', 'fechanacimiento', 'tiposangre'
    ];

    // Relación con el Hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    // Relación con el Rol
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rols_id');
    }

    // Relación con el Estado
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
