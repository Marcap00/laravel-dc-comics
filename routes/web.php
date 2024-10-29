<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon.index');
Route::get('/pokemon/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::get('/pokemon/{id}', [PokemonController::class, 'show'])->name('pokemon.show');
