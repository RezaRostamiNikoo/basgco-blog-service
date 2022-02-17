<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Post;
use Livewire\Component;

class BlogsList extends Component
{
    public function render()
    {
        $blogs = Post::all();
        return view('livewire.admin.blogs.blogs-list', ['blogs' => $blogs])->layout('admin.layouts.master');
    }
}
