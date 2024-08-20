<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias_prima extends Model
{
    use HasFactory;

    protected $table = 'materias_primas';

    public function compraMatprimas()
    {
        return $this->hasMany(CompraMatprima::class, 'matprima_id');
    }
}

