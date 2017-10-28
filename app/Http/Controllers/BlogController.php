<?php

namespace App\Http\Controllers;

use App\Model\Blog\Post;
use App\Model\Blog\Tag;
use App\Model\Blog\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status','1')->paginate(10);
        return view('blog.blog',compact('posts'));
    }

    public function post(Post $post)
    {
        return view('blog.details',compact('post'));
    }

    public function tagPosts(Tag $tags)
    {
    	return view('blog.blogbytag',compact('tags'));
    }

    public function categoryPosts(Category $categories)
    {
    	return view('blog.blogbycategory',compact('categories'));
    }
}
