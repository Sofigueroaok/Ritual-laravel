<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion',
        'contenido',
        'precio',
    ];

    public function precioFormateado(): string
    {
        return '$' . number_format((float) $this->precio, 0, ',', '.');
    }
}