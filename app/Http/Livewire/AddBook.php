<?php

namespace App\Http\Livewire;

use App\Book;
use App\User;
use Livewire\Component;

class AddBook extends Component
{
    public $book;
    public $status_id = 4;
    public $clicked = false;

    public function mount(Book $book)
    {
        $this->book = $book;
    }

    public function addBook()
    {
        auth()->user()->saveBook($this->book, ['status_id' => $this->status_id]);
        $this->clicked = true;
    }

    public function render()
    {
        if ($this->status_id !== 4) {
            auth()->user()->updateBook($this->book, $this->status_id);
        }

        return view('livewire.add-book', [
            'book' => $this->book,
        ]);
    }
}
