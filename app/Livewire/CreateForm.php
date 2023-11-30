<?php

namespace App\Livewire;

use Livewire\Component;

class CreateForm extends Component
{
    public $title;
    public $cap;
    public $description;
    public $email;
    
    public function render()
    {
        return view('livewire.create-form');
    }
}
