<?php

namespace App\Http\Livewire;

use App\Author;
use App\Book;
use Livewire\Component;

class FollowAuthor extends Component
{
    public $author;
    public $book;
    public $count;

    public function mount(Author $author, Book $book)
    {
        $this->author = $author;
        $this->book = $book;
        $this->count = $this->book->author->followedBy()->count();
    }

    public function followAuthor(){
        auth()->user()->followAuthor($this->author);
    }

    public function UnfollowAuthor(){
        auth()->user()->unFollowAuthor($this->author);
    }

    public function render()
    {
        $this->count = $this->book->author->followedBy()->count();
        return view('livewire.follow-author');
    }
}
