@extends('admin.master')
@section('content')

    
    <h4>User Show Page</h4>

    <p><b>Name: </b>{{ $user->name}}</p>
    <p><b>Email: </b>{{ $user->email}}</p>
    <p><b>Usertype: </b>{{ $user->usertype}}</p>
    <p><b>Password: </b>{{ $user->password}}</p>
    <p><b>Created_at: </b>{{ $user->created_at->format('D/M/Y - H:i')}}</p>
    <p><b>Updated_at: </b>{{ $user->updated_at->format('D/M/Y - H:i')}}</p>

    <a href="{{ route('user.index')}}" class="btn btn-dark text-white" >Back</a>
   


@endsection