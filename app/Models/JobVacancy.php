<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobVacancy extends Model
{
    
    protected $fillable = [
        'company_id',
        'titulo',
        'descripcion',
        'ciudad',
        'salario',
        'años_experiencia',
        'numero_vacantes',
        'nivel_educativo',
        'fecha_cierre',
    ];

     public function company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

       public static function getById($id)
    {
        return self::find($id);
    }
}
