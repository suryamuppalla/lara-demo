<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'books';

    protected $fillable = ['title', 'description', 'price', 'author', 'language', 'rating', 'img'];
}
