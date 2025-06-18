<?php 
    $title = 'About';
?>

@extends('layouts.master')
@section('content')


    <!-- Page Header Start -->
        @include('layouts.pageHeader')
    <!-- Page Header End -->

    <!-- About Start -->
        @include('layouts.about')
    <!-- About End -->

    <!-- Features Start -->
        @include('layouts.features')
    <!-- Features End -->


    <!-- Team Start -->
        @include('layouts.team')
    <!-- Team End -->


@endsection