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
    public function restaurantes()
    {
        return $this->belongsTo(Restaurante::class);
    }
    public function salons()
    {
        return $this->hasMany(Salon::class);
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
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
    public function servicios()
    {
        return $this->hasMany(Servicio::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
    public function pisos()
    {
        return $this->hasMany(Piso::class);
    }
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
    public function rols()
    {
        return $this->hasMany(Role::class);
    }
}
