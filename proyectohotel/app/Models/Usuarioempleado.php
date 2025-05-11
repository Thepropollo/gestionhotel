<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarioempleado extends Model
{
    use HasFactory;

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