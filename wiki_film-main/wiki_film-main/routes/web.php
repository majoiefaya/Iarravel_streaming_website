<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmController;
use App\Http\Controllers\ActeurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/users', [UserController::class, 'index'])
        ->can('access-admin')
        ->name('users.index');

    Route::get('/users/create', [UserController::class, 'create'])
        ->can('access-admin')
        ->name('users.create');

    Route::post('/users', [UserController::class, 'store'])
        ->can('access-admin')
        ->name('users.store');

    Route::get('/users/{user}/edit', [UserController::class, 'edit'])
        ->can('access-admin')
        ->name('users.edit');

    Route::put('/users/{user}', [UserController::class, 'update'])
        ->can('access-admin')
        ->name('users.update');

    Route::delete('/users/{user}', [UserController::class, 'destroy'])
        ->can('access-admin')
        ->name('users.destroy');
});


// Routes pour les films
Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create-film')->middleware('auth');
Route::post('/films', [FilmController::class, 'store'])->name('films.store')->middleware('auth');
Route::get('/films/{film}', [FilmController::class, 'show'])->name('films.show-film');
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit-film')->middleware('auth');
Route::put('/films/{film}', [FilmController::class, 'update'])->name('films.update')->middleware('auth');
Route::delete('/films/{film}', [FilmController::class, 'destroy'])->name('films.destroy')->middleware('auth');

// Routes pour les acteurs
Route::get('/acteurs', [ActeurController::class, 'index'])->name('acteurs.index');
Route::get('/acteurs/create', [ActeurController::class, 'create'])->name('acteurs.create-acteur')->middleware('auth');
Route::post('/acteurs', [ActeurController::class, 'store'])->name('acteurs.store')->middleware('auth');
Route::get('/acteurs/{acteur}', [ActeurController::class, 'show'])->name('acteurs.show-acteur');
Route::get('/acteurs/{acteur}/edit', [ActeurController::class, 'edit'])->name('acteurs.edit-acteur')->middleware('auth');
Route::put('/acteurs/{acteur}', [ActeurController::class, 'update'])->name('acteurs.update')->middleware('auth');
Route::delete('/acteurs/{acteur}', [ActeurController::class, 'destroy'])->name('acteurs.destroy')->middleware('auth');


require __DIR__ . '/auth.php';
