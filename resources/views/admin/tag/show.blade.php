@extends('admin.master')
@section('content')

   <h1>Tag Show Page</h1>

    <h4><b>Tag: </b>{{ $tag->tag }}</h4>
    <a href="{{ route('tag.index')}}" class="btn btn-dark text-white">Back</a>

@endsection