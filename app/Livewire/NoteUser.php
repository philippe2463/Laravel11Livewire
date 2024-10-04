<?php

namespace App\Livewire;

use Livewire\Component;

class NoteUser extends Component
{
    public $note = 0;
    public $user;

    protected $rules = [
        'note' => 'required|integer|between:0,20',
    ];

    public function submit()
    {   
        $this->validate();
        $this->user->note = $this->note;
        $this->user->save();
    }

    public function render()
    {
        return view('livewire.note-user');
    }
}

