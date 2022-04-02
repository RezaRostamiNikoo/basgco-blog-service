<?php

namespace App\Http\Livewire\Admin\Pages\Blogs;

use App\Models\Post;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Middleware\ThrottleRequests;
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

        return view('livewire.admin.pages.blogs.new-blog', ['post' => $post])->layout('admin.layouts.master');
    }
}
