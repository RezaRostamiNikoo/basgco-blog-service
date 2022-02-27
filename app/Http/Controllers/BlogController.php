<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(Request $request, $categoryslug, $blogslug)
    {
        $post = Category::where('slug', $categoryslug)->first()->posts()->where('slug', $blogslug)->first();

        return view('livewire.pages.blog', ['post' => $post]);
    }
}
