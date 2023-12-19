<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';
    protected $fillable = [
        'fechaInicio',
        'fechaFinal',
        'horaInicio',
        'horaFinal',
        'descripcion',
        'beneficio_id',
        'user_id'
    ];
}
