<?php

use App\Models\Actor;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::get('/movies', function() {
   $movies = Actor::find(1)->movies()->latest()->simplePaginate(3);
    return view('movies.index', ['movies' => $movies]);
});

Route::get('/movies/create', function() {
    return view('movies.create');
});

Route::get('/movies/{movie}', function(Movie $movie) {
    $movie->with('actors');

    return view('movies.show', ['movie' => $movie]);
});

Route::post('/movies', function() {
    request()->validate([
        'title' => 'required|unique:movies,title',
        'image' => 'required',
        'description' => 'required',
    ]);

   $movie = Movie::create([
        'title' => request('title'),
        'image' => request('image'),
        'description' => request('description'),
    ]);
    $movie->actors()->attach(1);
    return redirect('/movies');
});

Route::get('/movies/{movie}/edit', function(Movie $movie) {
    return view('movies.edit', ['movie' => $movie]);
});

Route::patch('/movies/{movie}', function(Movie $movie) {
    request()->validate([
        'title' => 'required|unique:movies,title,' . $movie->id,
        'image' => 'required',
        'description' => 'required',
    ]);

    $movie->update([
        'title' => request('title'),
        'image' => request('image'),
        'description' => request('description')
    ]);

    return redirect("/movies/$movie->id");
});

Route::delete('/movies/{movie}', function(Movie $movie) {
    $movie->delete();
    return redirect("/movies");
});


