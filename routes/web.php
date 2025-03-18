<?php

use App\Http\Controllers\MovieController;
use App\Models\Actor;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('/movies',[MovieController::class,'index']);
Route::get('/movies/create',[MovieController::class,'create']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);
Route::post('/movies',[MovieController::class,'store']);
Route::get('/movies/{movie}/edit',[MovieController::class, 'edit']);
Route::patch('/movies/{movie}',[MovieController::class, 'update']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);


