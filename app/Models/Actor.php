<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

    protected $fillable = ['name'];
    public function movies() {
        return $this->belongsToMany(Movie::class)->withTimestamps();
    }
}
