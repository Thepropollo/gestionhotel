<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $fillable = ['numero_del_piso','piso_restaurante','piso_salon','numero_total_habitacion','hotel_id'];
}
