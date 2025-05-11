<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostPage extends Component
{
    public $posts;
    public function mount(){
        $this->posts = Post::latest()->get();
    }
    public function render()
    {
        return view('livewire.post-page');
    }
}
