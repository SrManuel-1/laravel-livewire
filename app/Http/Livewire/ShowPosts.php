<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{

    public function render()
    {
        $posts = Post::all(); //recuperamos toda la informacion del modelo
        return view('livewire.show-posts', compact('posts')); //Renderizamos la vista con la informacion del modelo
    }
}
