<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarioempleado extends Model
{
    protected $fillable = [
        'empleado_id',
        'correo',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
