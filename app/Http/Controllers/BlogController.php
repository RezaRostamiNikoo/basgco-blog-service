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

    public function show(Request $request, $blog) // blog as slug
    {
        $post = Post::where('slug', $blog)->with(['categories'])->first();
        if (!isset($post)) throw new NotFoundHttpException("مقاله مورد نظر یافت نشد");
        return view("pages.blogs.show", ['post' => $post]);
    }
}
