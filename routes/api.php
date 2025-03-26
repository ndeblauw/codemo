<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('articles', [\App\Http\Controllers\Api\ArticleController::class, 'index']);
Route::get('articles/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'show'])->name('api.articles.show');

Route::get('authors', [\App\Http\Controllers\Api\AuthorController::class, 'index']);
Route::get('authors/{author}', [\App\Http\Controllers\Api\AuthorController::class, 'show'])->name('api.authors.show');
