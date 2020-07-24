<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class FollowUser extends Component
{
    public $user;

    public function mount(User $user){
        $this->user = $user;
    }

    public function followUser()
    {
        auth()->user()->followUser($this->user);

        activity()
            ->performedOn($this->user)
            ->causedBy(auth()->user())
            ->inLog('Started Following User')
            ->withProperties(['name' => $this->user->name])
            ->log(auth()->user()->name . ' started following ' . $this->user->name);
    }

    public function UnfollowUser()
    {
        auth()->user()->unFollowUser($this->user);
    }

    public function render()
    {
        return view('livewire.follow-user');
    }
}
