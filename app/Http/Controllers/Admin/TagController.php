<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = \App\Models\Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

}
