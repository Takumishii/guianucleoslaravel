<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Apunte extends Model
{
    protected $fillable = [
        'nucleo_id',
        'titulo',
        'contenido',
        'codigo_ejemplo',
    ];

    public function nucleo(): BelongsTo
    {
        return $this->belongsTo(Nucleo::class);
    }
}