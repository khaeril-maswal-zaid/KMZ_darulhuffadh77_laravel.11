<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ikdh extends Model
{
    use HasFactory;

    protected $fillable = [
        'cabang',
        'tholabah_id'
    ];

    protected $with = ['ketua'];

    function ketua(): BelongsTo
    {
        return $this->belongsTo(Tholabah::class, 'tholabah_id', 'id');
    }
}
