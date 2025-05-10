<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $fillable = ['nombre','numero_piso','capacidad','descripcion','precio_hora','estado_id','piso_id'];
}
