<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'characters', 'movieID', 'actorID');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie', 'movieID', 'genreID');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'watchlists', 'movieID', 'userID');
    }
}
