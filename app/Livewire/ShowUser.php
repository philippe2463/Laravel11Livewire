<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.show-user');//->layout('layouts.guest');
    }
}