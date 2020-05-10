@extends('layout')

@section('title')
Show Tweet
@endsection
@section('content')

@include('partials.errors')

<!-- <div class="card">
  <div class="card-header">

        <h2>{{$profile->name ?? ''}}</h2>
            <p>
              <strong> Post: </strong>
                    <br>
                    <div class="card-body"> 
                    <p>{{ $tweet->content }}</p>
</p>
    <h4>Display Comments</h4>

    @include('tweet.commentsDisplay', ['comments' => $tweet->comments, 'tweet_id' => $tweet->id])


                    
     <a href="{{route('comments.show', $tweet->id)}}" id="reply"></a>
                    
                    <div id="app">
                        <comment-create-form submission-url="{{route('comments.store')}}" tweet-id="{{ $tweet->id }}" v-model="content">
                            @csrf
                        </comment-create-form>
                        <Giphy v-on:image-clicked="imageClicked"/>
                    </div>

@endsection -->