<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublishingHouse extends Model
{
    protected $fillable = [
      'name', 'country',
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
