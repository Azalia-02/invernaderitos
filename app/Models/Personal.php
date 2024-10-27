<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table = 'tb_personal';
    protected $primaryKey = 'id_personal';
    protected $fillable =  [
        'nombre',
        'app',
        'apm',
        'telefono',
        'email',
        'curp',
        'rfc',
        'cargo',
        'foto',
    ];
}
