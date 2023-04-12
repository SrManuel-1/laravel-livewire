<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $titulo;

    public function mount($title){//se define un metodo llamado mount
        $this->titulo = $title; //Se le asigna esta informacion a esta propiedad
    }
    public function render()
    {
        return view('livewire.show-posts');
    }
}
