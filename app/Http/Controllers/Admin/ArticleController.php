<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {

        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'author_id' => 1,
            'is_public' => 1,
        ]);

        return redirect('/admin/articles');
    }
