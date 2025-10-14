<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect('/genres'));

Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
