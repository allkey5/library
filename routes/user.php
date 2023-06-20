<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['user'])->group(function () {
    Route::get('/account/{id}', [UserController::class, 'show'])->name('account');

    Route::get('/books/page', [BookController::class, 'index'])->name('books.page');
    Route::post('/books/page/{book}', [BookingController::class, 'create'])->name('books.booking');

    Route::get('/books/rent/{book}', [RentalController::class, 'index'])->name('rental.index');
    Route::post('/books/rent/create/{book}', [RentalController::class, 'create'])->name('rental.create');
});
