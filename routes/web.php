<?php

use App\Models\Actor;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function() {
   $movies = Actor::find(1)->movies()->latest()->simplePaginate(3);
    return view('movies.index', ['movies' => $movies]);
});

Route::get('/movies/create', function() {
    return view('movies.create');
});

Route::get('/movies/{movie}', function($id) {
    $movie = Movie::with('actors')->find($id);

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

Route::get('/movies/{movie}/edit', function($id) {
    $movie = Movie::find($id);

    return view('movies.edit', ['movie' => $movie]);
});

Route::patch('/movies/{movie}', function($id) {
    $movie = Movie::findOrFail($id);
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

Route::delete('/movies/{movie}', function($id) {
    Movie::findOrFail($id)->delete();
    return redirect("/movies");
});

Route::get('/contact', function() {
    return view('contact');
});
