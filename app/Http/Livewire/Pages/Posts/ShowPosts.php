<?php

namespace App\Http\Livewire\Pages\Posts;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{

    public $message = "hamid";


    public function render()
    {
        $posts = Post::all();
        return view('livewire.pages.posts.show-posts', ['posts' => $posts]);
    }
}
