<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('articles', [\App\Http\Controllers\Api\ArticleController::class, 'index']);
Route::get('articles/{article}', [\App\Http\Controllers\Api\ArticleController::class, 'show'])->name('api.articles.show');
