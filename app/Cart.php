<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function checkOut()
    {
        $this->update(['checked_out' => 1]);
    }
}
