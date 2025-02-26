<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::whereHas('articles')->orderBy('name')->get();

        return view('site.authors.index', ['authors' => $authors]);
    }

    public function show(int $id)
    {
        $author = User::find($id);

        return view('site.authors.show', ['author' => $author]);
    }
}
