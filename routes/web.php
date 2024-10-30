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

/* Pokemon Resources */
Route::name('pokemon.')->prefix('pokemon')->group(function () {
    Route::get('/', [PokemonController::class, 'index'])->name('index');
    Route::post('/', [PokemonController::class, 'store'])->name('store');
    Route::get('/create', [PokemonController::class, 'create'])->name('create');
    Route::get('/{id}', [PokemonController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PokemonController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PokemonController::class, 'update'])->name('update');
    Route::delete('/{id}', [PokemonController::class, 'destroy'])->name('destroy');
});

/* Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon.index');
Route::post('/pokemon', [PokemonController::class, 'store'])->name('pokemon.store');
Route::get('/pokemon/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::get('/pokemon/{id}', [PokemonController::class, 'show'])->name('pokemon.show');
Route::get('/pokemon/{id}/edit', [PokemonCOntroller::class, 'edit'])->name('pokemon.edit');
Route::put('/pokemon/{id}', [PokemonController::class, 'update'])->name('pokemon.update');
Route::delete('/pokemon/{id}', [PokemonController::class, 'destroy'])->name('pokemon.destroy'); */