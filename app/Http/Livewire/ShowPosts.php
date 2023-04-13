<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    public $search;

    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('content', 'like', '%' . $this->search . '%')->get(); //Consulta filtrada, donde la variable search captura la informacion del input
        return view('livewire.show-posts', compact('posts')); //Renderizamos la vista con la informacion del modelo
    }
}
