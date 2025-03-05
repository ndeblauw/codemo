<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        // if this is not ok, return to form
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
        ]);

        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'author_id' => 1,
            'is_public' => 1,
        ]);

        return redirect('/admin/articles');
    }

    public function edit(int $id)
    {
        $article = Article::find($id);

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
        ]);

        $article = Article::find($id);

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/admin/articles');
    }

    public function destroy(int $id)
    {
        $article = Article::find($id);

        $article->delete();

        return redirect('/admin/articles');
    }

}
