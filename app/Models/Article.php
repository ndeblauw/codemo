<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

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
