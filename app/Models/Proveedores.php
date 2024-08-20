<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'proveedor_id');
    }
}
