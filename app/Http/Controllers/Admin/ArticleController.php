<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = (auth()->user()->is_admin)
            ? Article::get()
            : Article::where('author_id', auth()->user()->id)->get();

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
            'author_id' => auth()->user()->id,
            'is_public' => 1,
        ]);

        return redirect('/admin/articles');
    }

    public function edit(int $id)
    {
        $article = Article::find($id);

        if ( ! $article->canBeChanged() ) {
            abort(403, 'Unauthorized action.');
        }

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
        ]);

        $article = Article::find($id);

        if ( ! $article->canBeChanged() ) {
            abort(403, 'Unauthorized action.');
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/admin/articles');
    }

    public function destroy(int $id)
    {
        $article = Article::find($id);

        if ( ! $article->canBeChanged() ) {
            abort(403, 'Unauthorized action.');
        }

        $article->delete();

        return redirect('/admin/articles');
    }

}
