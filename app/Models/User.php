<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Tu código actual, por ejemplo:
    protected $fillable = [
        'name',
        'email',
        'password',
        'empleado_id',
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
