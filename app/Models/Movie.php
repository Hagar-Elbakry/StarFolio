<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model{

    protected $fillable = [
        'title',
        'description',
    ];

    public function actors() {
        return $this->belongsToMany(Actor::class);
    }
}
