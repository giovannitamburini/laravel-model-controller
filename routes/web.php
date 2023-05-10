<?php

use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Movie\MovieController;
use Illuminate\Support\Facades\Route;

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

// devo aprire un array, inserire la classe del controller come primo parametro(NomeController::class) e poi devo inserire il nome della funzione
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/movies', [PageController::class, 'index'])->name('index');
