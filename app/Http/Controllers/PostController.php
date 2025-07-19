<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Gate;
use App\Events\PostCreated;


class PostController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
        $this->authorizeResource(Post::class, 'post');
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(20);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if($request->hasFile('image')){

            $file = $request->file('image');
            $fileName = rand()."_".$file->getClientOriginalName();
            $file->move('assets/img/',$fileName);

            $data['image'] = $fileName;
        }

        $data['user_id'] = auth()->user()->id;

        $post = Post::create($data);
        $post->tags()->attach($request->tags);

        //Event 
        PostCreated::dispatch($post);
        
        return to_route('posts.index')->with('created','Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if($post->image != ""){

            $image = public_path('assets/img/'.$post->image);
            unlink($image);
        }

        if($request->hasFile('image')){

            $file = $request->file('image');
            $fileName = time()."_".$file->getClientOriginalName();
            $file->move('assets/img/',$fileName);

            $data['image'] = $fileName;
        }

        if(empty($request->is_special)){
            $data['is_special'] = 0;
        }

        $post->update($data);
        $post->tags()->sync($request->tags);

        return to_route('posts.index')->with('updated','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if($post->image != ""){
            $image = public_path('assets/img/'.$post->image);
            unlink($image);
        }

        $post->tags()->detach();
        $post->delete();
       
        return redirect()->back()->with('deleted','Post deleted successfully');
    }
}
