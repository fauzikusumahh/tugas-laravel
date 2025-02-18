<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genres extends Model
{
    //
    use HasFactory;
    protected $table = 'genres';
    protected $fillable = ['name'];
    public function movies()

    {
        return $this->hasMany(Movies::class);
    }


}
