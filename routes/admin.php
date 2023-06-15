<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryBookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:admin'])->group(function () {
Route::middleware(['admin'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('main');
    Route::get('/books', [BookController::class, 'index'])->name('admin.books.index');
    Route::resource('/categories', CategoryController::class)->except(['show']);
    Route::resource('/books', BookController::class);
    Route::resource('/categorybooks', CategoryBookController::class)->except(['show']);
    Route::resource('/users', UserController::class);
    Route::resource('/authors', AuthorController::class);
    Route::resource('/roles', RoleController::class);
});
