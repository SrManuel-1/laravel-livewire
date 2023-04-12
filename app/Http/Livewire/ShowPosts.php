<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $name;//Definimos la propiedad

    public function mount($name){
        $this->name = $name; //Le asignamos un valor a esa propiedad
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
