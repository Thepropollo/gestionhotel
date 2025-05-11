<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = ['nombre','numerototalmesas','numerototalsillas','pisos_id'];
    public function mesas(){
        return $this->hasMany(Mesa::class);
    }
}
