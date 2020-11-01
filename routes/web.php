<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/panier', [UserController::class, 'index']);
Route::get('/commande', [OrderController::class, 'index']);

Route::get('/book/create', [BookController::class, 'create'])->middleware('auth', 'can:create, App\Models\Book');


Route::get('/compte', [UserController::class, 'index']);
Route::get('/compte/{user}/edit', [UserController::class, 'edit']);
