<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantas extends Model
{
    use HasFactory;
    protected $table = 'tb_planta';
    protected $primaryKey = 'id_planta';
    protected $fillable =  [
        'nombre',
        'tipo',
        'descripcion',
        'precio',
        'stock',
        'imagen',
    ];
}
