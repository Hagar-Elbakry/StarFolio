<?php

namespace App\Policies;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MoviePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function edit(User $user, Movie $movie) :bool {
        return $movie->users->contains($user);
    }

    public function show(User $user, Movie $movie) :bool {
        return $movie->users->contains($user);
    }
}
