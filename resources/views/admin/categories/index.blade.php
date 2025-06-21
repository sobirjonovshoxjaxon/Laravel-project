@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Table</h4>
                    <a href="{{ route('category.create')}}" class="btn btn-success">Create</a>
                  </div>

                  @if(Session::has('created'))
                    <div class="alert alert-success">{{ Session::get('created') }}</div>
                  @endif

                  @if(Session::has('updated'))
                    <div class="alert alert-warning">{{ Session::get('updated') }}</div>
                  @endif 

                  @if(Session::has('deleted'))
                    <div class="alert alert-danger">{{ Session::get('deleted') }}</div>
                  @endif

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>T/R</th>
                          <th>Category</th>
                          <th>Slug</th>
                          <th colspan="3">Action</th>
                        </tr>

                        @foreach($categories as $category)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->category }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                              <a href="{{ route('category.show',$category->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('category.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <form onsubmit="return confirm('Kategoriyani o\'chirishni haqiqatdan ham istaysizmi?')" action="{{ route('category.destroy',$category->id)}}" method="POST">
                                @csrf 
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Delete">
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>

                  {{ $categories->links('vendor.pagination.bootstrap-4') }}
                  
                </div>
            </div>


@endsection