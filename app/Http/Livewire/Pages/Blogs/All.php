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
        return view('livewire.pages.blogs.all', ['posts' => Post::paginate(10)]);
    }
}
