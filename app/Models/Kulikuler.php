<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kulikuler extends Model
{
    use HasFactory;

    protected $fillable = [
        'enum',
        'name',
        'full_name',
        'description',
    ];
}
