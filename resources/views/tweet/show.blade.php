@extends('layout')

@section('title')
Show Tweet
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    @include('partials.errors')

                    <h2>{{$profile->username ?? ''}}</h2>
                    <p>
                       <strong> Tweet: </strong>
                    <br>
                    <div class="card-body"> 
                    <p>{{ $tweet->message }}</p>
                    </p>
                        <h4>Display Comments</h4>
                        @include('tweet.commentsDisplay', ['comments' => $tweet->comments, 'tweet_id' => $tweet->id])

                         <section>
                            @if( $comment->is_gif == TRUE )
                            <figure>
                                <img src="{{ $comment->content }}">
                            </figure>
                            @else
                            <p>
                                {{ $comment->content }}
                            </p>
                            @endif
                            </section>
                    
   <a href="{{route('comments.show', $tweet->id)}}" id="reply"></a>
                 
                    <div id="app">
                        <comment-create-form submission-url="{{route('comments.store')}}" tweet-id="{{ $tweet->id }}" v-model="content">
                            @csrf
                        </comment-create-form>
                        <Giphy v-on:image-clicked="imageClicked"/>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection