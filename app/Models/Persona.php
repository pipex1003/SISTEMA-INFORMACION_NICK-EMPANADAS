<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'persona_id');
    }

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class, 'persona_id');
    }
}
