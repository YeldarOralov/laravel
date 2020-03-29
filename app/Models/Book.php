<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $hidden = ['id'];
    protected $fillable = [
        'name', 'author', 'year', 'rating'
    ];
}
