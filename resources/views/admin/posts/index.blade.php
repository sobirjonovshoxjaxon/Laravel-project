@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Post Table</h4>
                    <a href="{{ route('posts.create')}}" class="btn btn-success">Create</a>
                  </div>

                    @if(Session::has('created'))
                        <div class="alert alert-success">{{ Session::get('created') }}</div>
                    @endif

                    @if(Session::has('updated'))
                        <div class="alert alert-warning">{{ Session::get('updated') }}</div >
                    @endif

                    @if(Session::has('deleted'))
                        <div class="alert alert-danger">{{ Session::get('deleted') }}</div>
                    @endif

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>T/R</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Short_content</th>
                          <th>Content</th>
                          <th colspan="3">Action</th>
                        </tr>

                        @foreach($posts as $post)
                          <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <img width="100px" src="{{ asset('assets/img/'.$post->image)}}" alt="">
                            </td>
                            <td>{{  Str::limit($post->short_content,25) }}</td>
                            <td>{{ Str::limit($post->content,50) }}</td>
                            <td>
                              <a href="{{ route('posts.show',$post->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <form action="{{ route('posts.destroy',$post->id)}}" method="POST">
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
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>


@endsection