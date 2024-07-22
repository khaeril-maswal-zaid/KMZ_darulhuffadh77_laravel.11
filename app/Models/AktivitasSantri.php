<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasSantri extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'hari',
        'waktu',
        'agenda',
        'picture',
    ];
}
