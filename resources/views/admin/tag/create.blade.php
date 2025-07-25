@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Tag Form Create</h4>
                    <a href="{{ route('tag.index')}}" class="btn btn-dark text-white">Back</a>
                  </div>
                  <div class="card-body">

                   <form action="{{ route('tag.store')}}" method="POST">
                    @csrf 

                      <div class="form-group">
                        <label>Tag</label>
                        <input type="text" class="form-control" name="tag" value="{{ old('tag')}}">
                        @error('tag')
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