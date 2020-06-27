<?php


namespace App;


trait FollowableUser
{

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
