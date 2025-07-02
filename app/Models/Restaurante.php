<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{

    protected $fillable = [
        'piso_id', 
        'estado_id', 
        'empleado_id', 
        'nombre', 
        'numerototalmesas', 
        'numerototalsillas'
    ];

    // Relación con Piso
    public function piso()
    {
        return $this->belongsTo(Piso::class);
    }

    // Relación con Estado
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    // Relación con Empleado
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }
}
