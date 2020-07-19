<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConfirmButton extends Component
{
    public $conf;

    public function dodo()
    {
        $this->conf = auth()->user()->cart() ? "Confirm" : "Confirmed!";
    }

    public function render()
    {
        $this->conf = auth()->user()->cart() ? "Confirm" : "Confirmed!";
        return view('livewire.confirm-button');
    }
}
