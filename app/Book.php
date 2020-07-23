<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Book extends Model
{
    use LogsActivity;

//    protected static $ignoreChangedAttributes = ['title', 'updated_at'];

    protected static $logAttributes = ['title', 'summary'];

    protected static $logOnlyDirty = true;

    protected static $recordEvents = ['created', 'updated'];

    public static $logName = "Book";

    public function getDescriptionForEvent(string $eventName): string
    {
        return "This Book has been {$eventName}";
    }

    protected $fillable = [
        'title',
        'author_id',
        'publishing_house_id',
        'summary',
        'language',
        'isbn',
        'image',
        'rating',
        'price',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publishing_house()
    {
        return $this->belongsTo(PublishingHouse::class);
    }

    public function getImageAttribute()
    {
        return $this->attributes['image'] ? "/storage/" . $this->attributes['image'] : 'https://ibf.org/site_assets/img/placeholder-book-cover-default.png';
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function cart(User $user)
    {
        return $this->belongsToMany(Cart::class)->where('user_id', $user->id)->where('checked_out', 0)->first();
    }
}
