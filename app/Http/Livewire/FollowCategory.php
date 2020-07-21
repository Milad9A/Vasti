<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class FollowCategory extends Component
{
    public $category;
    public $count;

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->count = $this->category->followedBy()->count();
    }

    public function followCategory()
    {
        auth()->user()->followCategory($this->category);

        activity()
            ->performedOn($this->category)
            ->causedBy(auth()->user())
            ->withProperties(['name' => $this->category->name])
            ->log(auth()->user()->name . ' started following ' . $this->category->name);
    }

    public function UnfollowCategory()
    {
        auth()->user()->unFollowCategory($this->category);
    }

    public function render()
    {
        $this->count = $this->category->followedBy()->count();
        return view('livewire.follow-category');
    }
}
