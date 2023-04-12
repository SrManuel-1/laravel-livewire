<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $title;//Llamamos la variable inicializada en componente del dashboard para que pueda ser usada
    public function render()
    {
        return view('livewire.show-posts');
    }
}
