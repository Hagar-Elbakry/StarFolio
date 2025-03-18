<?php

use App\Http\Controllers\MovieController;
use App\Models\Actor;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('movies', MovieController::class);




