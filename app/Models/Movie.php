<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model{

    protected $guarded = [];

    public function actors() {
        return $this->belongsToMany(Actor::class)->withTimestamps();
    }
}
