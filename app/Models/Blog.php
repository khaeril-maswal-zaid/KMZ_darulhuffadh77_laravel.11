<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'oleh',
        'slug',
        'title',
        'excerpt',
        'body1',
        'body2',
        'picture1',
        'picture2',
        'picture3',
        'album',
        'visit'
    ];

    protected $with = ['kategori'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    // Author diambil dari kolum oleh bukan 'user_id'

    public function scopeTitle(Builder $query): void
    {
        $query->where('title', 'like', '%' . request('search') . '%');
    }
}
