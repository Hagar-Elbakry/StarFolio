<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MovieController extends Controller
{
    public function index() {
        $movies = User::find(1)->movies()->latest()->simplePaginate(3);
        return view('movies.index', ['movies' => $movies]);
    }

    public function create() {
        return view('movies.create');
    }
    public function show(Movie $movie) {
        $movie->with('users');
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
        $movie->users()->attach(1);
        return redirect('/movies');
    }

    public function edit(Movie $movie) {
        if(Auth::guest()) {
            return redirect('/login');
        }

        if(!$movie->users->contains(Auth::user())) {
            abort(403);
        }
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
