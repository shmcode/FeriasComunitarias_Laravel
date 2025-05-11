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

    public function edit(Feria $feria)
{
    $emprendedores = Emprendedor::all();
    return view('ferias.edit', compact('feria', 'emprendedores'));
}

    public function emprendedores()
    {
        return $this->belongsToMany(Emprendedor::class, 'feria_emprendedor');
    }
}