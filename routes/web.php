<?php

use App\Models\Actor;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function() {
   $movies = Actor::find(1)->movies()->simplePaginate(3);
    return view('movies', ['movies' => $movies]);
});

Route::get('/movies/{movie}', function($id) {
    $movie = Movie::with('actors')->find($id);

    return view('/movie', ['movie' => $movie]);
});

Route::get('/contact', function() {
    return view('contact');
});
