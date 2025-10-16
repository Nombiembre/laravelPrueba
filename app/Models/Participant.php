<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
     protected $fillable = [
        'numero_documento',
        'nombres',
        'apellidos',
        'email',
        'telefono',
        'fecha_nacimiento',
        'ciudad',
        'nivel_educativo',
        'años_experiencia',
        'es_joven',
        'estado',
    ];
}
