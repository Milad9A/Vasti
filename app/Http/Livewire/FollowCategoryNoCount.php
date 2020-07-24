<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class FollowCategoryNoCount extends Component
{
    public $category;

    public function mount(Category $category){
        $this->category = $category;
    }

    public function followCategory()
    {
        auth()->user()->followCategory($this->category);

        activity()
            ->performedOn($this->category)
            ->causedBy(auth()->user())
            ->inLog('Started Following Category')
            ->withProperties(['name' => $this->category->name])
            ->log(auth()->user()->name . ' started following the Category ' . $this->category->name);
    }

    public function UnfollowCategory()
    {
        auth()->user()->unFollowCategory($this->category);
    }

    public function render()
    {
        return view('livewire.follow-category-no-count');
    }
}
