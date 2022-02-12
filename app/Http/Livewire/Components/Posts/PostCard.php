<?php

namespace App\Http\Livewire\Components\Posts;

use App\Models\Post;
use Livewire\Component;

class PostCard extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.components.posts.post-card');
    }
}
