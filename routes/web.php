<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogamesController;

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

Route::get('/', [VideogamesController::class, 'home'])->name('home');
Route::get('/videogames', [VideogamesController::class, 'index'])->name('videogames');
Route::get('/videogames/{id}', [VideogamesController::class, 'show'])->name('videogames_details');
