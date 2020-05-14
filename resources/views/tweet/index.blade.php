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


 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Tweets</div>
                <div class="card-body">

                    <ul>@foreach($tweets as $tweet)

<div class="card" class="gridCard m-b-md" style="width: 40rem;">
        <ul>
            <div class="card-body"> 
                <li>
                    <a href="{{ route('profiles.show', $tweet->user_id) }}" class="text-dark" class="nav-link">
		                  <h2>{{$tweet->name }}</h2>
                    </a>
                  
		              {{--<div class="float-right">
              
                            @if($follower->followed ?? '') 
                                 <small>Followed</small>

                                @else 
                                <small>Not Followed</small>
                       @endif
		              </div>--}}
                    <p>
                        {{ $tweet->message }}
                    </p>
                    @auth
			
	            <a href="{{route('tweet.show', $tweet->id) }}">
                    <button data-post-id="{{ $tweet->id }}"> View Comments</button>
                </a>
                <p>
                   <div>{{ $tweet->comments_count }} Comments </div>
                </p>

                <small>{{ $tweet->posted_at }}</small>

             {{--<div class="pull-right">
                    @if (Auth::check())
                    <like :tweet={{ $tweet->id }} :liked={{ $tweet->liked() ? 'true' : 'false' }}>
                    </like>
                    @endif
                    <span>{{ $tweet->likes()->count() }}</span>
                </div>--}} 

            
                @endauth
                </li> 
            </div>
        </ul>
</div>
@endforeach
<div class="row">
    <div class="col-12 text-enter">
    {{ $tweets->links() }}
    </div>
</div>

@endsection

</div>



