<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra_matprima extends Model
{
    use HasFactory;

    protected $table = 'compra_matprimas';

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'compra_id');
    }

    public function materiaPrima()
    {
        return $this->belongsTo(MateriaPrima::class, 'matprima_id');
    }
}

