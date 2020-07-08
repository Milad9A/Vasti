<?php

namespace App\Http\Livewire;

use App\Book;
use Livewire\Component;

class AddBook extends Component
{
    public $book;
    public $status_id;
    public $clicked = false;

    public function mount(Book $book)
    {
        $this->book = $book;
        if (auth()->user())
            $this->status_id = auth()->user()->status->where('pivot.book_id', $this->book->id)->pluck('id')->first();
    }

    public function addBook()
    {
        auth()->user()->saveBook($this->book, ['status_id' => 1]);
        $this->clicked = true;
    }

    public function render()
    {
        if ($this->status_id !== null) {
            auth()->user()->updateBook($this->book, $this->status_id);
            $this->status_id = auth()->user()->status->where('pivot.book_id', $this->book->id)->pluck('id')->first();
        }

        return view('livewire.add-book');
    }
}
