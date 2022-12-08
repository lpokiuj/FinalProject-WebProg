<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'characters', 'movieID', 'actorID')->withPivot('charName');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie', 'movieID', 'genreID');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'watchlists', 'movieID', 'userID');
    }

    public function scopeWithGenre(Builder $query, $genre)
    {
        if(!is_null($genre)){
            return $query->whereRelation('genres', 'genreName', 'LIKE', '%'.$genre.'%');
        }

        return $query;
    }

    public function scopeWithSort(Builder $query, $sort)
    {
        if(!is_null($sort)){
            if($sort == 'latest'){
                return $query->latest();
            }
            if($sort == 'ascending'){
                return $query->orderBy('title', 'asc');
            }
            if($sort == 'descending'){
                return $query->orderBy('title', 'desc');
            }
        }

        return $query;
    }

    public function scopeWithSearch(Builder $query, $search)
    {
        if(!is_null($search)){
            return $query->where('title', 'LIKE', '%'.$search.'%');
        }

        return $query;
    }
}
