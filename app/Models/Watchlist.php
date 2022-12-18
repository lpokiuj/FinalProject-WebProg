<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movieID');
    }

    public function scopeWithStatus(Builder $query, $status)
    {
        if(!is_null($status)){
            return $query->whereRelation('watchlists', 'status', 'LIKE', '%'.$status.'%');
        }

        return $query;
    }
}
