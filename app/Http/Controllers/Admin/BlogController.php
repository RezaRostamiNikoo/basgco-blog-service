<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('post_status', '<>', 'preparing')->orderBy('created_at', 'DESC')->get();
        return view("admin.pages.blogs.index", ['posts' => $posts]);
    }

    public function edit(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view("admin.pages.blogs.edit", ['post' => $post]);
    }

    public function create(Request $request)
    {
        return view();
    }
}
