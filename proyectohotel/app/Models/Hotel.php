<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
     protected $fillable = ['nombre' , 'ciudad', 'direccion', 'telefono', 'correo', 'total_pisos' , 'plazagaraje'];
       public function empleado(){
        return $this->hasMany(Empleado::class);
    }
     public function factura(){
        return $this->hasMany(Factura::class);
    }
    public function piso(){
        return $this->hasMany(Piso::class);
    }
}
