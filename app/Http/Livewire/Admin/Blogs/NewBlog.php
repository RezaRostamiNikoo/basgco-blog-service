<?php

namespace App\Http\Livewire\Admin\Blogs;

use Livewire\Component;

class NewBlog extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.new-blog')->layout('admin.layouts.master');
    }
}
