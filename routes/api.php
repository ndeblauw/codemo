<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('articles', [\App\Http\Controllers\Api\ArticleController::class, 'index']);
Route::get('articles/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'show'])->name('api.articles.show');

Route::middleware(['auth:sanctum'])->group(function() {
    Route::post('articles', [\App\Http\Controllers\Api\ArticleController::class, 'store'])->name('api.articles.store');
    Route::put('articles/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'update'])->name('api.articles.update');
    Route::delete('articles/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'destroy'])->name('api.articles.destroy');

    //Route::apiResource('articles', \App\Http\Controllers\Api\ArticleController::class)->except(['index', 'show']);
});

Route::get('authors', [\App\Http\Controllers\Api\AuthorController::class, 'index']);
Route::get('authors/{author}', [\App\Http\Controllers\Api\AuthorController::class, 'show'])->name('api.authors.show');
