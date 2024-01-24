<?php

namespace App\Http\Controllers;

use Stephenjude\FilamentBlog\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest('published_at')->paginate(10);  // Retrieve published posts

        return view('blogfile.blogpage', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);  // Retrieve post by id
        $author = Post::with(['author', 'category'])->find($id)->author->name;

        return view('blogfile.blogread', compact('post', 'author'));
    }
}
