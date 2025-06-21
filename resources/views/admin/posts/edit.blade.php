@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Post Edit Form</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark text-white">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')

                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        <img width="300px" src="{{ asset('assets/img/'.$post->image)}}" alt="">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                      </div>

                      <div class="form-group">
                        <label>Short_content</label>
                        <input type="text" class="form-control" name="short_content" value="{{ $post->short_content }}">
                        @error('short_content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                      </div>

                       <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control">{{ $post->content }}</textarea>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                      </div>

                      <div class="form-group">
                        <input class=" ml-1 form-check-input" type="checkbox" id="gridCheck" name="is_special" value="1" {{ $post->is_special == 1 ? 'checked' : '' }}>
                        <label class="ml-4 form-check-label" for="gridCheck">
                          Is special ?
                        </label>
                      </div>

                      <div class="form-group">
                        <label>Tags</label>
                        <select style="width: 100%" class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                          @foreach($tags as $tag)
                            <option @if(in_array($tag->id, $post->tags->pluck('id')->toArray() )) selected @endif value="{{ $tag->id }}">{{ $tag->tag }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                          @foreach($categories as $category)
                            <option {{ $post->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->category }}</option>
                          @endforeach
                        </select>
                      </div>
                 
                      <button class="btn btn-warning mr-1" type="submit">Edit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                   </form>
                  </div>
                </div>
            </div>

@endsection