<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
     protected $fillable = ['nombre', 'ciuddad', 'direccion', 'telefono', 'num_habitaciones', 'correo', 'garaje'];
       public function empleados(){
        return $this->hasMany(Empleado::class);
    }
     public function facturas(){
        return $this->hasMany(Factura::class);
    }
    public function pisos(){
        return $this->hasMany(Piso::class);
    }
}
