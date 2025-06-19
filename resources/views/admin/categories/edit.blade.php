@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>Category Form Edit</h4>
                    <a href="{{ route('category.index')}}" class="btn btn-dark text-white">Back</a>
                  </div>
                  <div class="card-body">


                    <form action="{{ route('category.update',$category->id)}}" method="POST">
                      @csrf 
                      @method('PUT') 

                        <div class="form-group">
                          <label>Category</label>
                          <input type="text" class="form-control" name="category" value="{{ $category->category }}">
                        </div>

                      <button class="btn btn-warning mr-1" type="submit">Edit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                    </form>
                 
                    
                  </div>
                </div>
            </div>

@endsection