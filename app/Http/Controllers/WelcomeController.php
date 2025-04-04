<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $latest_articles = cache()->remember('latest_articles', 10, function () {
            return \App\Models\Article::latest()->take(5)->get();
        });

        return view('welcome', compact('latest_articles'));
    }
}
