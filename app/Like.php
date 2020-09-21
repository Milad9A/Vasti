<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Like extends Model
{
    use LogsActivity;

//    protected static $ignoreChangedAttributes = ['title', 'updated_at'];

    protected static $logAttributes = ['liked', 'user_id', 'review_id'];

    protected static $logOnlyDirty = true;

    protected static $recordEvents = ['created', 'updated'];

    public static $logName = "Like";

    public function getDescriptionForEvent(string $eventName): string
    {
        if ($this->liked == 1)
            return User::findOrFail($this->user_id)->name . " liked your review";
        else
            return User::findOrFail($this->user_id)->name . " disliked your review";

    }

    protected $guarded = [];

    public function review(){
        return $this->belongsTo(Review::class);
    }
}
