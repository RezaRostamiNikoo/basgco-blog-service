<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Post;
use Livewire\Component;

class NewBlog extends Component
{
    public function render()
    {
        $post = Post::newDraft();

        return view('livewire.admin.blogs.new-blog',['post'=>$post])->layout('admin.layouts.master');
    }
}
