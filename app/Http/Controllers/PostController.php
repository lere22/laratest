<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // All Post
    public function index() {

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' : '. $category->name;
        }
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' : '. $author->name;
        }

        return view('posts', [
            "title" => "All Posts".$title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    // Single Post
    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
