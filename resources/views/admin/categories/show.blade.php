@extends('admin.master')
@section('content')

    <h1>Category Show Page</h1>

    <h4><b>Category: </b>{{ $category->category }}</h4>
    <a href="{{ route('category.index')}}" class="btn btn-dark text-white">Back</a>

@endsection