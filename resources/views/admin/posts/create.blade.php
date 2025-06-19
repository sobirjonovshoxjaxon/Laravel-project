@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Post Form Create</h4>
                    <a href="{{ route('posts.index')}}" class="btn btn-dark text-white">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf 

                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image" value="{{ old('image') }}">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="form-group">
                        <label>Short_content</label>
                        <input type="text" class="form-control" name="short_content" value="{{ old('short_content') }}">
                        @error('short_content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>

                       <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                 
                      <button class="btn btn-success mr-1" type="submit">Create</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                   </form>
                  </div>
                </div>
            </div>

@endsection