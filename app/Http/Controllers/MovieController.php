<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;


class MovieController extends Controller
{
    public function index() {
        $movies = Actor::find(1)->movies()->latest()->simplePaginate(3);
        return view('movies.index', ['movies' => $movies]);
    }

    public function create() {
        return view('movies.create');
    }
    public function show(Movie $movie) {
        $movie->with('actors');
        return view('movies.show', ['movie' => $movie]);
    }

    public function store() {
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
    }

    public function edit(Movie $movie) {
        return view('movies.edit', ['movie' => $movie]);
    }

    public function update(Movie $movie) {
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
    }

    public function destroy(Movie  $movie) {
        $movie->delete();
        return redirect("/movies");
    }
}
