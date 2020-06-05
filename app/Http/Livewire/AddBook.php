<?php

namespace App\Http\Livewire;

use App\Book;
use App\User;
use Livewire\Component;

class AddBook extends Component
{
    public $book;
    public $ffff;
    public $clicked = false;

    public function mount(Book $book)
    {
        $this->ffff = 4;
        $this->book = $book;
    }

    public function addBook()
    {
        auth()->user()->saveBook($this->book, ['status_id' => $this->ffff]);
        $this->clicked = true;
    }

    public function render()
    {
        if ($this->ffff !== 4) {
            auth()->user()->updateBook($this->book, $this->ffff);
        }

        return view('livewire.add-book', [
            'book' => $this->book,
        ]);
    }
}
