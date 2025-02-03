<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\model;
class Genre extends Model
{
    //
    use Hasfactory;
    protected $table = 'genres';
}