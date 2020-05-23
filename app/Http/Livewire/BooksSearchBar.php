<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BooksSearchBar extends Component
{
    public $search = '';

    protected $updatesQueryString = ['search' => ['except' => '']];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $this->emit('result', $this->search);
        return view('livewire.books-search-bar');
    }
}
