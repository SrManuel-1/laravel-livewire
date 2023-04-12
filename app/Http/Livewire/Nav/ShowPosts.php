<?php

namespace App\Http\Livewire\Nav;

use Livewire\Component;

class ShowPosts extends Component
{
    public function render()
    {
        return view('livewire.nav.show-posts');
    }
}

//Manejo de componentes de manera organizada en una carpeta
//Para la creacion de este se ejecuta el comando: php artisan make:livewire NombredeCarpeta\NombredeArchivo