<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{
    public function index(){

        $posts = Post::latest()->limit(3)->get();
        return view('index',compact('posts'));
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function project(){
        return view('project');
    }

    public function post($slug){

        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->paginate(9);
        return view('post',compact('posts','category'));
    }

    public function postdetail($slug){

        $post = Post::where('slug',$slug)->first();

        $categories = Category::all();

        //Related Posts 
        $relatedPosts = Post::where('category_id',$post->category_id)
        ->where('id','!=',$post->id)
        ->latest()
        ->limit(5)
        ->get();

        //View 
        $post->increment('view');
        $post->save();

        return view('postdetail',compact('post','categories','relatedPosts'));
    }

    public function contact(){
        return view('contact');
    }

    public function specialPosts(){

        $specialPosts = Post::where('is_special',1)->paginate(9);
        return view('specialPosts',compact('specialPosts'));
    }

    public function popularPosts(){

        $popularPosts = Post::orderBy('view','DESC')->limit(9)->get();
        return view('popularPosts',compact('popularPosts'));
    }
}
