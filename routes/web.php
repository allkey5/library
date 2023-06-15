<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('admin.layout.admin');
});
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login_form', [AuthController::class, 'login'])->name('login_form');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register_form', [AuthController::class, 'register'])->name('register_form');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::middleware(['web'])->group(function () {
    Route::get('/account/{id}', [UserController::class, 'show'])->name('account');
});
