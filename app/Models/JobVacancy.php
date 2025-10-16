<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobVacancy extends Model
{
    

     public function company(): BelongsTo{
        return $this->belongsTo(Company::class);
    }

       public static function getById($id)
    {
        return self::find($id);
    }
}
