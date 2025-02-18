<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'movies';
    protected $fillable = ['title', 'year', 'summary', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genres::class, 'genre_id');
    }
}

