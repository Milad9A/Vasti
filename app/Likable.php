<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select review_id, sum(liked) likes, sum(!liked) dislikes from likes group by review_id',
            'likes',
            'likes.review_id',
            'reviews.id'
        );
    }


    public function isDislikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('review_id', $this->id)
            ->where('liked', false)
            ->count();
    }

    public function likesAll()
    {
        return $this->hasMany(Like::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class)->where('liked', true);
    }

    public function dislikes()
    {
        return $this->hasMany(Like::class)->where('liked', false);
    }

    public function isLikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('review_id', $this->id)
            ->where('liked', true)
            ->count();
    }

    public function dislike()
    {
        return $this->like(false);
    }

    public function like($liked = true)
    {
        $this->likesAll()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['liked' => $liked]
        );
    }
}
