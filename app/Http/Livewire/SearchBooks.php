<?php

namespace App\Http\Livewire;

use App\Book;
use Livewire\Component;

class SearchBooks extends Component
{
    public $search;

    protected $listeners = ['result' => 'set'];

    public function set($s){
        $this->search = $s;
    }

    public function render()
    {
        return view('livewire.search-books', [
            'books' => Book::where('title', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
