<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'sponsored' => 'boolean',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function canBeChanged(): bool
    {
        if (auth()->user()->is_admin) {
            return true;
        }

        if($this->author_id == auth()->user()->id) {
            return true;
        }

        return false;
    }
}
