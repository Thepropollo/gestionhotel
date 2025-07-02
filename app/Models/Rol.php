<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;
    protected $fillable = ['nombrerol', 'descripcion'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
