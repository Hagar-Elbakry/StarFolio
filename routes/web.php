<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function() {

    return view('movies', ['movies' => [
        [
            'id' => 1,
            'title' => 'Divergent',
            'description' => 'In a dystopian future, society is divided into factions based on human virtues.
             Tris Prior discovers she’s Divergent, meaning she doesn’t fit into just one faction.
              She meets Four (played by Theo James), a mysterious instructor who helps her navigate this dangerous world.'
        ],
        [
            'id' => 2,
            'title' => 'Underworld: Blood Wars',
            'description' => 'In this action-packed supernatural thriller,
             Theo James plays David, a vampire who helps Selene (Kate Beckinsale) fight against both the Lycan and Vampire clans,
              who seek her blood to enhance their power.'
        ],
        [
            'id' => 3,
            'title' => 'Archive',
            'description' => 'A sci-fi drama where Theo James plays George Almore,
             a scientist working on a highly advanced AI that could bring back his deceased wife.
              As he gets closer to success, ethical dilemmas and hidden secrets begin to surface.'
        ]
    ]]);
});

Route::get('/movies/{movie}', function($id) {
    $movies = [
        [
            'id' => 1,
            'title' => 'Divergent',
            'description' => 'In a dystopian future, society is divided into factions based on human virtues.
             Tris Prior discovers she’s Divergent, meaning she doesn’t fit into just one faction.
              She meets Four (played by Theo James), a mysterious instructor who helps her navigate this dangerous world.'
        ],
        [
            'id' => 2,
            'title' => 'Underworld: Blood Wars',
            'description' => 'In this action-packed supernatural thriller,
             Theo James plays David, a vampire who helps Selene (Kate Beckinsale) fight against both the Lycan and Vampire clans,
              who seek her blood to enhance their power.'
        ],
        [
            'id' => 3,
            'title' => 'Archive',
            'description' => 'A sci-fi drama where Theo James plays George Almore,
             a scientist working on a highly advanced AI that could bring back his deceased wife.
              As he gets closer to success, ethical dilemmas and hidden secrets begin to surface.'
        ]
    ];

    $movie = Arr::first($movies, fn($movie)=> $movie['id'] == $id);
    return view('/movie', ['movie' => $movie]);
});

Route::get('/contact', function() {
    return view('contact');
});
