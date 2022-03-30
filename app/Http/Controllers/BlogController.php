<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function all()
    {
        return view("pages.blogs.all");
    }

    public function show(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        if (!isset($post)) throw new NotFoundHttpException("مقاله مورد نظر یافت نشد");
        return view("pages.blogs.show", ['post' => $post]);
    }
}
