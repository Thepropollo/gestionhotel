<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estado extends Model
{
    use HasFactory;
    protected $fillable = ['nombreestado', 'descripcion'];
    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }
    public function salon()
    {
        return $this->belongsTo(Salon::class);
    }
    public function mesas()
    {
        return $this->hasMany(Mesa::class);
    }
    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class);
    }
    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
}
