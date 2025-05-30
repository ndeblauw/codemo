<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleIndexResource;
use App\Http\Resources\ArticleShowResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);

        return ArticleIndexResource::collection($articles);
    }

    public function show(Article $article)
    {
        return new ArticleShowResource($article);
    }

    public function store(Request $request)
    {
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

        return response()->json([
            'message' => 'Article created successfully',
        ], 201);

    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:10', 'max:255'],
            'content' => ['required'],
        ]);

        if ( ! $article->canBeChanged() ) {
            abort(403, 'Unauthorized action.');
        }

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return response()->json([
            'message' => 'Article updated successfully',
        ], 200);
    }

    public function destroy(Article $article)
    {
        if ( ! $article->canBeChanged() ) {
            abort(403, 'Unauthorized action.');
        }

        $article->delete();

        return response()->json([
            'message' => 'Article deleted successfully',
        ], 200);
    }

}
