@extends('layout')

@section('title')
Show Tweet
@endsection
@section('content')

@include('partials.errors')

<h2>{{$profile->name}}</h2>
<p>
  <strong> Post: </strong>
                    <br>
                    <div class="card-body"> 
                    <p>{{ $tweet->content }}</p>
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
                    
     <a href="{{route('comments.show', $post->id)}}" id="reply"></a>
                    
                    <div id="app">
                        <comment-create-form submission-url="{{route('comments.store')}}" comment-id="{{ $comment->id }}" post-id="{{ $post->id }}" v-model="content">
                            @csrf
                        </comment-create-form>
                        <Giphy v-on:image-clicked="imageClicked"/>
                    </div>
                    
@endsection