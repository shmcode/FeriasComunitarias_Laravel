<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_evento',
        'direccion',
        'descripcion',
    ];
}
