@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>User Table</h4>
                  </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>T/R</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Usertype</th>
                          <th colspan="2">Action</th>
                        </tr>

                        @foreach($users as $user) 
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->usertype }}</td>
                            <td>
                              <a href="{{ route('user.show',$user->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <form  onsubmit="return confirm('Shu foydalanuvchini rostdan ham o\'chirmoqchimisiz')" action="{{ route('user.destroy',$user->id)}}" method="POST">
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

                  {{ $users->links('vendor.pagination.bootstrap-4') }}
                  
                </div>
            </div>


@endsection