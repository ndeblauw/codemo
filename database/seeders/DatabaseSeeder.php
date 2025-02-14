<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Profile::factory(5)->create();

        Article::factory(20)->create();
        Comment::factory(50)->create();

        $tags = Tag::factory(10)->create();
        foreach($tags as $tag) {
            $articles = Article::inRandomOrder()->take(random_int(0,4))->get();
            $tag->articles()->attach($articles);
        }
    }
}
