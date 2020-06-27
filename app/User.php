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
        return "/storage/" . $this->attributes['image'];
    }

}
