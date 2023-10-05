<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description',
        'description_short',
        'section_id',
        'on_home',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'on_home' => 'boolean',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(ArticleSection::class, 'section_id');
    }

    protected static function booted(): void
    {
        static::creating(function (Article $article) {
            $article->description_short = str(strip_tags($article->description))->limit(50, '...')->value();
        });

        static::updating(function (Article $article) {
            $article->description_short = str(strip_tags($article->description))->limit(50, '...')->value();
        });
    }
}
