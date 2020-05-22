<?php

namespace App\Http\Livewire;

use App\Book;
use Livewire\Component;

class SearchPosts extends Component
{
    public $search = '';

    protected $updatesQueryString = ['search' => ['except' => '']];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.search-books', [
            'posts' => Book::where('title', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
