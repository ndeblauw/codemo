<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = \App\Models\User::whereHas('articles')->orderBy('name')->get();

        return \App\Http\Resources\AuthorIndexResource::collection($authors);
    }

    public function show(User $author)
    {
        return new \App\Http\Resources\AuthorShowResource($author);
    }
}
