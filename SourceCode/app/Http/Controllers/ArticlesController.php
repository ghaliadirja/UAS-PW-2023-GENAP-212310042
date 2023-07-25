<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class ArticlesController extends Controller
{
    public function Articles()
    {
        $posts = Post::get();
        return view('blog.articles', compact('posts'));

    }

    public function Post()
    {
        $posts = Post::get();
        return view('blog.post', compact('posts'));

    }
}