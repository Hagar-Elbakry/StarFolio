<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function() {

    return view('movies', ['movies' => Movie::all()]);
});

Route::get('/movies/{movie}', function($id) {
    $movie = Movie::find($id);
    return view('/movie', ['movie' => $movie]);
});

Route::get('/contact', function() {
    return view('contact');
});
