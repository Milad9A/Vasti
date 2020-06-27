<?php

namespace App\Http\Livewire;

use App\Author;
use Livewire\Component;

class FollowAuthor extends Component
{
    public $author;

    public function mount(Author $author)
    {
        $this->author = $author;
    }

    public function followAuthor(){
        auth()->user()->followAuthor($this->author);
    }

    public function UnfollowAuthor(){
        auth()->user()->unFollowAuthor($this->author);
    }

    public function render()
    {
        return view('livewire.follow-author');
    }
}
