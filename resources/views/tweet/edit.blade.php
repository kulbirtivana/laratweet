@extends('layout')

@section('title')
Edit Tweet
@endsection

@section('content')
<p>Use this form to edit a Tweet.</p>
{{--display errors--}}
@include('partials.errors')

<!-- <div id="app">
		<tweet-edit-form
			v-model="message"
			submission-url="{{ route( 'tweet.update', $tweet->id)  }}"
			original-message="{{$tweet->message}}">
			@csrf
			@method('PATCH')
		</tweet-edit-form>
	<Giphy v-on:image-clicked="imageClicked"/>
	</div>
 -->
<form method="post" action="{{ route('tweet.update', $tweet->id) }}">
	@csrf
	@method('PATCH')
	<label for="message">
		<strong>Input a Message:</strong>
		<textarea name="message" id="message" cols="30" rows="10">{{ $tweet->message }}</textarea>
	</label>
	<input type="submit" Value="Update Tweet">
	</form>

                <form action="{{ route('tweet.destroy', $tweet->id) }}" method="post">
                @csrf 
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Delete Post">
@endsection