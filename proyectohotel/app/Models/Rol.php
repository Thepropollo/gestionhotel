<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = ['nombrerol', 'descripcion'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
