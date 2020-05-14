<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'summary',
        'isbn',
        'image',
        'rating',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
