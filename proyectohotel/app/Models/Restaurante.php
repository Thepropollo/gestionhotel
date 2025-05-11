<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = ['nombre','numero_total_mesas','numero_total_sillas','pisos_id',''];
    public function mesa(){
        return $this->hasMany(Mesa::class);
    }
}
