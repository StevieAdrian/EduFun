<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PopularController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function() {
    return view('/about-us/about');
});

Route::get('/writers', [WriterController::class, 'index']);
Route::get('/writers/{id}', [WriterController::class, 'list'])->name('writers.detail');

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/popular', [PopularController::class, 'index'])->name('popular');
