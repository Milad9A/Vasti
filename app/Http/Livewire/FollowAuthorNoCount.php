<?php

namespace App\Http\Livewire;

use App\Author;
use Livewire\Component;

class FollowAuthorNoCount extends Component
{
    public $author;

    public function mount(Author $author){
        $this->author = $author;
    }

    public function followAuthor()
    {
        auth()->user()->followAuthor($this->author);

        activity()
            ->performedOn($this->author)
            ->causedBy(auth()->user())
            ->inLog('Started Following Author')
            ->withProperties(['name' => $this->author->name])
            ->log(auth()->user()->name . ' started following the Author ' . $this->author->name);
    }

    public function UnfollowAuthor()
    {
        auth()->user()->unFollowAuthor($this->author);
    }

    public function render()
    {
        return view('livewire.follow-author-no-count');
    }
}
