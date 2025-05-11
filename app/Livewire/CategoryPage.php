<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class CategoryPage extends Component
{
    public $category, $posts;
    public function mount($slug){
        $this->category = Category::where('slug', $slug)->first();
        $this->posts = Post::where('category_id', $this->category->id)->latest()->get();
    }

    public function render()
    {
        return view('livewire.category-page');
    }
}
