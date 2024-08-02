<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KulikulerPersonil extends Model
{
    use HasFactory;

    protected $fillable = [
        'kulikuler_id', 'santri_id', 'devisi', 'description',
    ];

    protected $with = ['kulikuler', 'santri'];

    function kulikuler(): BelongsTo
    {
        return $this->belongsTo(Kulikuler::class, 'kulikuler_id', 'id');
    }

    function santri(): BelongsTo
    {
        return $this->belongsTo(Tholabah::class, 'santri_id', 'id');
    }
}
