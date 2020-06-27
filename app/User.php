<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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
        return $this->belongsToMany(Status::class, 'book_user', 'user_id', 'status_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getImageAttribute()
    {
        return "/storage/" . $this->attributes['image'];
    }

    public function followedBy()
    {
        return $this->morphToMany('App\User', 'followable');
    }

    public function followsUsers()
    {
        return $this->morphedByMany('App\User', 'followable', 'followables', 'user_id', 'followable_id');
    }

    public function followsAuthors()
    {
        return $this->morphedByMany('App\Author', 'followable', 'followables', 'user_id', 'followable_id');
    }

    public function followsCategories()
    {
        return $this->morphedByMany('App\Category', 'followable', 'followables', 'user_id', 'followable_id');
    }

    public function followUser(User $user)
    {
        return $this->followsUsers()->save($user);
    }

    public function followAuthor(Author $author)
    {
        return $this->followsAuthors()->save($author);
    }

    public function unFollowAuthor(Author $author)
    {
        return $this->followsAuthors()->detach($author);
    }

    public function followCategory(Category $category)
    {
        return $this->followsCategories()->save($category);
    }
}
