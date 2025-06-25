@extends('admin.master')
@section('content')

    <h1>This is Show page</h1>

    <hr>

    <p><b>Title: </b>{{ $post->title }}</p>
    <p><b>Image: </b></p>
    <img width="400px" src="{{ asset('assets/img/'.$post->image)}}" alt="">
    <p><b>Short_content: </b>{{ $post->short_content }}</p>
    <p><b>Content: </b>{{ $post->content }}</p>
    <p><b>Slug: </b>{{ $post->slug}}</p>
    <p><b>View: </b>{{ $post->view }}</p>
    <p><b>is_special: </b>{{ $post->is_special }}</p>
    <p><b>Post Author: </b>{{ $post->user->name }}</p>

    <a href="{{ route('posts.index')}}" class="btn btn-dark text-white">Back</a>

@endsection