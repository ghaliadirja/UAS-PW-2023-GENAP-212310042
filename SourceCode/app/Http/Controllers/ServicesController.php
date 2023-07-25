<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function Services()
    {
        $posts = Post::get();
        return view('services', compact('posts'));

    }
}