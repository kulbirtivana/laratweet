@extends('layout')

@section('title')
LaraTweet
@endsection

@section('content')
@if ( session()->get('success'))
<div role="alert">
	{{session()->get('success')}}
</div>
@endif


<!-- @section('js')
    <script>
        var updatePostStats = {
            Like: function (tweetId) {
                document.querySelector('#likes-count-' + tweetId).textContent++;
            },
            Unlike: function(tweetId) {
                document.querySelector('#likes-count-' + tweetId).textContent--;
            }
        };
        var toggleButtonText = {
            Like: function(button) {
                button.textContent = "Unlike";
            },
            Unlike: function(button) {
                button.textContent = "Like";
            }
        };
        var actOnTweet = function (event) {
            var tweetId = event.target.dataset.tweetId;
            var action = event.target.textContent;
            toggleButtonText[action](event.target);
            updatePostStats[action](tweetId);
            axios.post('/tweet' + tweetId + '/act',
                { action: action });
        };
        Echo.channel('post-events')
        .listen('TweetAction', function (event) {
            console.log(event);
            var action = event.action;
            updatePostStats[action](event.tweetId);
        })
    </script> -->
<div id="app">
    @foreach($tweets as $tweet)

<div class="card" class="gridCard m-b-md" style="width: 30rem;">
        <ul>
            <div class="card-body"> 
                <li>
                    <a href="{{ route('profiles.show', $tweet->user_id) }}" class="text-dark" class="nav-link">
		                  <h2>{{$tweet->name }}</h2>
                    </a>
                  
		              <div class="float-right">
              
                            @if($follower->followed ?? '') 
                                 <small>Followed</small>

                                @else 
                                <small>Not Followed</small>
                       @endif
		              </div>
                    <p>
                        {{ $tweet->message}}
                    </p>
                    @auth
			
	            <a href="{{route('tweet.show', $tweet->id) }}">
                    <button data-post-id="{{ $tweet->id }}"> View Comments</button>
                </a>
                <p>
                    <div id="comments-count-{{ $tweet->id }}">{{ $tweet->comments_count }} Comments </div>
                </p>

                <small>{{ $tweet->posted_at }}</small>

                <Likes class="float-right" v-on:submit.prevent="onSubmit" data-post-id="{{ $tweet->id }}">
                        @csrf 
                        @method('PATCH')
                    </Likes> 
                
                <p  class="float-right">
                    <span id="comments-count-{{ $tweet->id }}">{{ $tweet->likes_count }} Likes </span>
                </p>
            
                @endauth
                </li> 
            </div>
        </ul>
</div>
@endforeach
{{ $tweets->links() }}
@endsection

</div>



