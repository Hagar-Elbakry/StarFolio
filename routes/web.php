<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/movies',[MovieController::class,'index'])->middleware('auth');
Route::get('/movies/create',[MovieController::class,'create'])->middleware('auth');

Route::get('/movies/{movie}', [MovieController::class, 'show'])
    ->middleware('auth')
    ->can('show', 'movie');

Route::post('/movies',[MovieController::class,'store'])->middleware('auth');

Route::get('/movies/{movie}/edit',[MovieController::class, 'edit'])
    ->middleware('auth')
    ->can('edit','movie');

Route::patch('/movies/{movie}',[MovieController::class, 'update'])
    ->middleware('auth')
    ->can('edit','movie');

Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])
    ->middleware('auth')
    ->can('edit','movie');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create'])->middleware('guest');
    Route::post('/register', [RegisterUserController::class, 'store'])->middleware('guest');

    Route::get('/login', [SessionController::class, 'create'])->name('login')->middleware('guest');
    Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
});

Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/profile', ProfileController::class)->middleware('auth');




