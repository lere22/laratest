<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // All Post
    public function index() {
        return view('posts', [
            "title" => "All Posts",
            "active" => "blog",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    // Single Post
    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
