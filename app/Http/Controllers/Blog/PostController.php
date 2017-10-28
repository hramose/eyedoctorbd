<?php

namespace App\Http\Controllers\Blog;

use Carbon\Carbon;
use Sentinel;
use App\User;
use App\Model\Blog\Post;
use App\Model\Blog\Tag;
use App\Model\Blog\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.blog.post.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blog.post.add',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);
        $file = $request->file('image');
        
         if (isset($file)) {
             $currentDate = Carbon::now()->toDateString();
             $filename = $currentDate . uniqid() . $file->getClientOriginalName();

             if (!file_exists('blog/thumb')) {
                 mkdir('blog/thumb',0777, true);
             }

            $img = Image::make($file)->resize(285,215)->save('blog/thumb/'.$filename,50);

            if (!file_exists('blog/mini-thumb')) {
                 mkdir('blog/mini-thumb',0777, true);
             }

            $img = Image::make($file)->resize(90,82)->save('blog/mini-thumb/'.$filename,50);

             if (!file_exists('blog/image/')) {
                 mkdir('blog/image/',0777, true);
             }
             $img = Image::make($file)->resize(782,403)->save('blog/image/'.$filename,50);                     

         }else{
             $filename = "default.png";

         }
        $post = new Post;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->image = $filename;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Sentinel::getUser()->id;
        $post->save();
        $post->tags()->attach($request->tags);    
        $post->categories()->attach($request->categories);
        return redirect(route('post.index'))->with('successMsg','Post Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blog.post.edit',compact('post','categories','tags'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);
        $post = Post::find($id);
        $file = $request->file('image');
        
                 if (isset($file)) {
                     $currentDate = Carbon::now()->toDateString();
                     $filename = $currentDate . uniqid() . $file->getClientOriginalName();
        
                     if (!file_exists('blog/thumb')) {
                         mkdir('blog/thumb',0777, true);
                     }
        
                    $img = Image::make($file)->resize(285,215)->save('blog/thumb/'.$filename,50);
                    if (!file_exists('blog/mini-thumb')) {
                         mkdir('blog/mini-thumb',0777, true);
                     }

                    $img = Image::make($file)->resize(90,82)->save('blog/mini-thumb/'.$filename,50);
        
                     if (!file_exists('blog/image/')) {
                         mkdir('blog/image/',0777, true);
                     }
                     $img = Image::make($file)->resize(782,403)->save('blog/image/'.$filename,50);                     
        
                 }else{
                     $filename = $post->image;
        
                 }
        
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->image = $filename;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();
        $post->tags()->sync($request->tags);    
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'))->with('successMsg','Post Successfully Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->image != 'default.png'){
            unlink(public_path('blog/thumb/'. $post->image));
            unlink(public_path('blog/image/'. $post->image));
        }
        $post->delete();
        return redirect(route('post.index'))->with('successMsg','Post Successfully Deleted');           
    }
}
