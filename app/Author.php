<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name'
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function followedBy()
    {
        return $this->morphToMany('App\User', 'followable');
    }
}
