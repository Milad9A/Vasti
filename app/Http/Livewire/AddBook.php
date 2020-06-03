<?php

namespace App\Http\Livewire;

use App\Book;
use App\User;
use Livewire\Component;

class AddBook extends Component
{
    public $book;
    public $user;
    public $clicked=false;

    public function mount(Book $book, User $user)
    {
        $this->book = $book;
        $this->user = $user;
    }

    public function addBook()
    {
        $this->user->saveBook($this->book, ['status_id' => 2]);
        $this->clicked=true;
    }

    public function render()
    {
        return view('livewire.add-book', [
                'user' => $this->user,
                'book' => $this->book,
            ]
        );
    }
}
