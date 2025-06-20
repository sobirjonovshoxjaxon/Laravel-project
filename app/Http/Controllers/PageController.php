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

    public function post(){
        return view('post');
    }

    public function postdetail($slug){
        $post = Post::where('slug',$slug)->first();

        $categories = Category::all();
        return view('postdetail',compact('post','categories'));
    }

    public function contact(){
        return view('contact');
    }
}
