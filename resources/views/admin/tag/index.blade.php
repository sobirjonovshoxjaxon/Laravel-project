@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tag Table</h4>
                    <a href="{{ route('tag.create')}}" class="btn btn-success">Create</a>
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
                          <th>Tag</th>
                          <th colspan="3">Action</th>
                        </tr>

                        @foreach($tags as $tag)
                          <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->tag }}</td>
                            <td>
                              <a href="{{ route('tag.show',$tag->id)}}" class="btn btn-primary">Show</a>
                            </td>

                            @canany(['update','delete'], $tag)
                              <td>
                                <a href="{{ route('tag.edit',$tag->id)}}" class="btn btn-warning">Edit</a>
                              </td>
                              <td>
                                <form onsubmit="return confirm('Siz haqiqatdan ham tegni o\'chirmoqchimisiz')" action="{{ route('tag.destroy',$tag->id)}}" method="POST">
                                  @csrf 
                                  @method('DELETE')

                                  <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                              </td>
                            @endcanany
                          </tr>

                        @endforeach 

                      </table>
                    </div>
                  </div>

                    {{ $tags->links('vendor.pagination.bootstrap-4') }}
                  
                </div>
            </div>


@endsection