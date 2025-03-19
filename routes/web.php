<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public pages of my application
Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/articles/{id}', [\App\Http\Controllers\ArticleController::class, 'show']);

Route::get('/authors', [\App\Http\Controllers\AuthorController::class, 'index']);
Route::get('/authors/{id}', [\App\Http\Controllers\AuthorController::class, 'show']);

// Logged in page of my application
Route::middleware('auth')->group( function() {
    Route::get('admin/articles', [\App\Http\Controllers\Admin\ArticleController::class, 'index']);
    Route::get('admin/articles/create', [\App\Http\Controllers\Admin\ArticleController::class, 'create']);
    Route::post('admin/articles', [\App\Http\Controllers\Admin\ArticleController::class, 'store']);
    Route::get('admin/articles/{id}/edit', [\App\Http\Controllers\Admin\ArticleController::class, 'edit']);
    Route::put('admin/articles/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'update']);
    Route::delete('admin/articles/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'destroy']);

    Route::get('admin/tags', [\App\Http\Controllers\Admin\TagController::class, 'index'])->middleware(\App\Http\Middleware\IsAdmin::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
