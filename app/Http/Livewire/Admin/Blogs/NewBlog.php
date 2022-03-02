<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Request;

class NewBlog extends Component
{
    public function render(Request $request)
    {
        if (isset($request->post_id))
            $post = Post::find($request->post_id);
        else
            $post = Post::newDraft();

        return view('livewire.admin.blogs.new-blog', ['post' => $post])->layout('admin.layouts.master');
    }
}
