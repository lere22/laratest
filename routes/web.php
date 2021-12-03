<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Jatayu",
        "email" => "jatayu@mail.com",
        "image" => "gambar.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "post-title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "post-author" => "Bambang",
            "post-content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ullam minus amet blanditiis dolorem reiciendis corporis similique sint atque autem distinctio temporibus eligendi officia magni consectetur, quam aliquid facilis est."
        ],
        [
            "post-title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "post-author" => "Susilo",
            "post-content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet veniam sint fugit quaerat hic? A minus suscipit blanditiis aperiam ipsum exercitationem omnis, id cum obcaecati ratione nulla unde. Neque, consequuntur?"
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
});

// Single Post
Route::get('/posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "post-title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "post-author" => "Bambang",
            "post-content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ullam minus amet blanditiis dolorem reiciendis corporis similique sint atque autem distinctio temporibus eligendi officia magni consectetur, quam aliquid facilis est."
        ],
        [
            "post-title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "post-author" => "Susilo",
            "post-content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet veniam sint fugit quaerat hic? A minus suscipit blanditiis aperiam ipsum exercitationem omnis, id cum obcaecati ratione nulla unde. Neque, consequuntur?"
        ]
    ];

    $single_post = [];
    foreach($blog_post as $post) {
        if ($post['slug'] === $slug) {
            $single_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $single_post
    ]);
});
