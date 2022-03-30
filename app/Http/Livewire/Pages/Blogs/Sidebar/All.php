<?php

namespace App\Http\Livewire\Pages\Blogs\Sidebar;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Component;

class All extends Component
{
    public function render()
    {
        $categories = Category::withCount(['posts'])->get();
        $tags = Tag::all();
        $posts = Post::orderBy('created_at')->take(3)->get();
        return view('livewire.pages.blogs.sidebar.all', compact('categories', 'posts','tags'));
    }
}
