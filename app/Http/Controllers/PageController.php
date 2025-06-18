<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
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

    public function postdetail(){
        return view('postdetail');
    }

    public function contact(){
        return view('contact');
    }
}
