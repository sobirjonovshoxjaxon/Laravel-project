<?php 
    $title = $post->title;
?>

@extends('layouts.master')
@section('content')


    <!-- Page Header Start -->
        @include('layouts.pageHeader')
    <!-- Page Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <div class="d-flex mb-2">
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                            <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="">January 01, 2045</a>
                             <span class="text-primary px-2">|</span>
                            <a class="text-secondary text-uppercase font-weight-medium" href="{{ route('post.page',$post->category->slug)}}">{{ $post->category->category }}</a>
                        </div>
                        <h4 class="section-title mb-3">{{ $post->short_content }}</h4>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid rounded w-100 mb-4" src="{{ asset ('assets/img/'.$post->image)}}" alt="Image">
                        <p>{{ $post->content }}</p>
                    
                    </div>

                    <div class="mb-5">
                        <h3 class="mb-4 section-title">{{ $post->comments->count() }} Comments</h3>

                        @foreach($post->comments as $comment)
                            <div class="media mb-4">
                                <img src="{{ asset ('assets/img/user.jpg')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>{{ $comment->body }}</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="bg-light rounded p-5">
                        <h3 class="mb-4 section-title">Izohni qoldiring</h3>
                        <form action="{{ route('comment.store')}}" method="POST">
                            @csrf 
                            <!-- <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div> -->

                            <div class="form-group">
                                <label for="message">Xabar</label>
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <textarea id="message" cols="30" rows="5" class="form-control" name="body"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-secondary rounded mb-5 py-5 px-4">
                        <img src="{{ asset ('assets/img/user.jpg')}}" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-white mb-3">John Doe</h3>
                        <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
                            ipsum
                            ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                    </div>
                    <div class="mb-5">
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control" style="padding: 25px;" placeholder="Keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Categories</h3>
                        <ul class="list-inline m-0">

                            @foreach($categories as $category)
                                <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="{{ route('post.page',$category->slug)}}"><i class="fa fa-angle-right text-secondary mr-2"></i>{{ $category->category }}</a>
                                    <span class="badge badge-primary badge-pill">{{ $category->posts->count() }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">O'xshash Postlar</h3>

                        @foreach($relatedPosts as $post)
                            <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                                <img class="img-fluid rounded" src="{{ asset ('assets/img/'.$post->image)}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                                <div class="d-flex flex-column pl-3">
                                    <a class="text-dark mb-2" href="{{ route('postdetail.page',$post->slug) }}">{{ $post->title }}</a>
                                    <div class="d-flex">
                                        <small><a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a></small>
                                        <small class="text-primary px-2">|</small>
                                        <small><a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a></small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">

                        @foreach($post->tags as $tag)
                            <a href="" class="btn btn-outline-secondary m-1">{{ $tag->tag }}</a>
                        @endforeach
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->

@endsection