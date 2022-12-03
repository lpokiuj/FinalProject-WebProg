<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function movies(){
        return $this->belongsTo(Movie::class, 'movieID', 'id');
    }
}
