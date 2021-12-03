<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
