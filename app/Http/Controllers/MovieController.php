<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MovieController extends Controller
{
    public function index() {
        $movies = Auth::user()->movies()->latest()->simplePaginate(3);
        return view('movies.index', ['movies' => $movies]);
    }

    public function create() {
        return view('movies.create');
    }
    public function show(Movie $movie) {
        return view('movies.show', ['movie' => $movie]);
    }

    public function store() {
        request()->validate([
            'title' => 'required|unique:movies,title',
            'image' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'year' => 'required',
        ]);

        $movie = Movie::create([
            'title' => request('title'),
            'image' => request('image'),
            'description' => request('description'),
            'genre' => request('genre'),
            'year' => request('year'),
            'user_id' => Auth::id()
        ]);
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
            'genre' => 'required',
            'year' => 'required',
        ]);

        $movie->update([
            'title' => request('title'),
            'image' => request('image'),
            'description' => request('description'),
            'genre' => request('genre'),
            'year' => request('year')
        ]);

        return redirect("/movies/$movie->id");
    }

    public function destroy(Movie  $movie) {
        $movie->delete();
        return redirect("/movies");
    }
}
