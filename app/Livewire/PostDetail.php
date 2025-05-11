<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class PostDetail extends Component
{
    public $slug, $post, $posts, $categories, $related_posts;

    public function mount($slug){
        $this->slug = $slug;
        $this->post = Post::where('slug', $slug)->first();
        $this->posts = Post::latest()->get();
        $this->categories = Category::latest()->get();
        $this->related_posts = Post::where('category_id', $this->post->category_id)->take(3)->get();
    }
    public function render()
    {
        return view('livewire.post-detail');
    }
}
