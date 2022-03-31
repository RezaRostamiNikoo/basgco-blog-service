<?php

namespace App\Http\Livewire\Pages\Blogs;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::where('post_status', '<>', 'preparing')->orderBy('created_at', 'DESC')->paginate(10);

        return view('livewire.pages.blogs.all', ['posts' => $posts]);
    }
}
