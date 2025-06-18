@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Category Form Create</h4>
                    <a href="{{ route('category.index')}}" class="btn btn-dark text-white">Back</a>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Category</label>
                      <input type="text" class="form-control">
                    </div>
                 
                    <button class="btn btn-success mr-1" type="submit">Create</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </div>
            </div>

@endsection