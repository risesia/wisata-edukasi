<?php

namespace App\Http\Controllers;

use Stephenjude\FilamentBlog\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->paginate(3);  // Retrieve published posts

        return view('welcome', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);  // Retrieve post by id

        return view('blog-show', compact('post'));
    }
}
