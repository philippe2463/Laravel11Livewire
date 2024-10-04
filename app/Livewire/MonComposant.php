<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class MonComposant extends Component
{
    public $note = 0;
    public $index = 1;

    protected $rules = [
        'note' => 'required|integer|between:0,20',
        'index' => 'required|exists:users,id',
    ];

    protected $messages = [
        'note.integer' => 'C\'est quand même mieux un nombre pour une note !',
    ];
    
    public function submit()
    {   
        $this->validate();
        $user = User::find($this->index);
        $user->note = $this->note;
        $user->save();
    }
    
    public function render()
    {
        return view('livewire.mon-composant');
    }
}
