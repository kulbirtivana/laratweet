@extends('layout')

@section('title')
View Comments
@endsection

@section('content')


<h4> Here are the Comments</h4>

@include('partials.errors')

    <strong> Username: </strong>
    
    <h5> {{ $profile->username }} </h5>

    <p>{{ $tweet->content }}</p>


@endsection