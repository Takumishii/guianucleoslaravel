<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nucleo extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function apuntes(): HasMany
    {
        return $this->hasMany(Apunte::class);
    }
}