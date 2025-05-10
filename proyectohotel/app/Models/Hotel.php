<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
     protected $fillable = ['nombre' , 'ciudad', 'direccion', 'telefono', 'correo', 'pisos' , 'plazagaraje','factura_id'];
      public function hotels(){
        
    }
}
