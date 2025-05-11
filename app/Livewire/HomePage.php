<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class HomePage extends Component
{
    public $posts , $categories;

    public function mount(){
        $this->posts = Post::latest()->take(6)->get();
        $this->categories = Category::orderBy('name', 'asc')->latest()->get();
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
