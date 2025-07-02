<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id',
        'rols_id',
        'estado_id',
        'nombre',
        'apellido',
        'cedula',
        'fechanacimiento',
        'tiposangre',
        'correo',
        'telefono',
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
