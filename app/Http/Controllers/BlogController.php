<?php

namespace App\Http\Controllers;

use App\Model\Blog\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('blog.blog',compact('posts'));
    }

    public function post(Post $post)
    {
        return view('blog.details',compact('post'));
    }
}
