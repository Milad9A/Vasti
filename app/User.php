<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, FollowableUser;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image', 'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function saveBook(Book $book, $status_id)
    {
        return $this->books()->save($book, $status_id);
    }

    public function updateBook(Book $book, $status_id)
    {
        return $this->books()->updateExistingPivot($book->id, ['status_id' => $status_id]);
    }

    public function status()
    {
        return $this->belongsToMany(Status::class, 'book_user')->withPivot('book_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getImageAttribute()
    {
        return $this->attributes['image'] ? "/storage/" . $this->attributes['image'] : 'https://66.media.tumblr.com/7d65a925636d6e3df94e2ebe30667c29/tumblr_nq1zg0MEn51qg6rkio1_1280.jpg';
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function saveBookToCart(Book $book)
    {
        if ($this->cart())
            $this->cart()->books()->save($book);
        return null;
    }

    public function cart()
    {
        return $this->belongsToMany(Cart::class)->where('carts.user_id', $this->id)->where('checked_out', 0)->first();
    }

}
