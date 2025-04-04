<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = \App\Models\Article::orderBy('title')->with('author')->paginate(10);

        return view('site.articles.index', ['articles' => $articles]);
    }

    public function show(int $id)
    {
        $article = Article::find($id);

        return view('site.articles.show', ['article' => $article]);
    }
}
