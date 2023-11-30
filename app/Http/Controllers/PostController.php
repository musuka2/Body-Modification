<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use App\Models\Image;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(5)]); 
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }
    
    // public function store(PostRequest $request, Post $post)
    // {
    //     $input = $request['post'];
    //     $post->fill($input)->save();
        
    //     return redirect('/posts/' . $post->id);
    // }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $input['user_id'] = Auth::id();
        $post->fill($input)->save();
        
        if($request->file('images')){
            foreach( $request->file('images') as $file ) {
                $image_url = Cloudinary::upload($file->getRealPath())->getSecurePath();
                $image = new Image();
                $image->post_id = $post->id;
                $image->image_url = $image_url;
                $image->save();
            }
        }
        
        if($request->file('videos')){
            foreach( $request->file('videos') as $file ) {
                $video_url = Cloudinary::upload($file->getRealPath())->getSecurePath();
                $image = new Image();
                $image->post_id = $post->id;
                $image->image_url = $video_url;
                $image->save();
            }
        }

        return redirect('/posts/' . $post->id);
        
        $path='';
        $movie=$request->file('movie');
        if(isset($movie)===true)
        {
           $path=$movie->store('videos','public');
        }
        Post::create([
           'user_id'=>\Auth::user()->id,
           'category_id'=>$request->category,
           'name'=>$request->name,
           'description'=>$request->description,
           'movie'=>$path,
        ]);
        
        session()->flash('success','投稿しました。');
        return redirect()->route('posts.create');
    }

    
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        
        return redirect('/');
    }
}
