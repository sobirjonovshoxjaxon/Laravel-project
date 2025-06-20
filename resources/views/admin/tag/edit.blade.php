@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Tag Edit Form</h4>
                    <a href="{{ route('tag.index')}}" class="btn btn-dark text-white">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('tag.update',$tag->id)}}" method="POST">
                    @csrf 
                    @method('PUT')

                      <div class="form-group">
                        <label>Tag</label>
                        <input type="text" class="form-control" name="tag" value="{{ $tag->tag }}">
                        @error('tag')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror 
                      </div>
                 
                      <button class="btn btn-warning mr-1" type="submit">Edit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                   </form>
                  </div>
                </div>
            </div>

@endsection