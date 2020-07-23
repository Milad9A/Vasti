<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Review extends Model
{
    use Likable, LogsActivity;

//    protected static $ignoreChangedAttributes = ['title', 'updated_at'];

    protected static $logAttributes = ['body', 'user_id', 'book_id'];

    protected static $logOnlyDirty = true;

    protected static $recordEvents = ['created', 'updated'];

    public static $logName = "Review";

    public function getDescriptionForEvent(string $eventName): string
    {
        if ($eventName === 'created')
        return User::findOrFail($this->user_id)->name . ' added a review to the book ' . Book::findOrFail($this->book_id)->title;
    }


    protected $fillable = [
      'user_id',
      'book_id',
      'body',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
