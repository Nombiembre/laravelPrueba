<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $fillable = [
        'nit',
        'nombre_empresa',
        'email',
        'telefono',
        'ciudad',
        'estado',
    ];

    /**
     * Obtener una empresa por su ID.
     *
     * @param  int  $id
     * @return Company|null
     */
    public static function getById($id)
    {
        return self::find($id);
    }

    public function jobs(): HasMany{
        return $this->hasMany(JobVacancy::class);
    }
}
