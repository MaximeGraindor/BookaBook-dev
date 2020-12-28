<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookOrderController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/students', [UserController::class, 'index']);



// ORDER
Route::get('/order', [OrderController::class, 'index']);
Route::post('/order/validatedOrder', [OrderController::class, 'validatedOrder']);
Route::post('/order/changeStatus', [OrderController::class, 'changeStatus']);

Route::delete('/bookOrder/{BookOrder}', [BookOrderController::class, 'destroy']);

Route::post('/order/add', [OrderController::class, 'store'])->name('addOrder');
Route::get('/order/{order}', [OrderController::class, 'show']);



// BOOK
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/book/create', [BookController::class, 'create']);
Route::get('/book/{book}', [BookController::class, 'show']);
Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('deleteBook');
Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('editBook');


// ACCOUNT
Route::get('/account', [UserController::class, 'show']);
Route::patch('/account/{user}', [UserController::class, 'update']);
Route::get('/account/{user}/edit', [UserController::class, 'edit']);
