@foreach($comments as $comment)
     @if($comment->parent_id != null) style="margin-left:35px;" @endif>
        <strong>{{ $tweet->name }}</strong>


    <section>
        @if( $comment->is_gif == TRUE )
        <figure>
            <img src="{{ $comment->content }}">
        </figure>
        @else
        <p class="card-body">
            {{ $comment->content }}
        </p>
        @endif
    </section>

            <div class="form-group">
           <div class="form-group ml-1">
        <a href="{{ route('comments.edit', $comment->id) }}" post-id="{{ $post_id }}" comment-id="{{ $comment->id }}" class="btn btn-primary  btn-sm">Edit Comment</a>
    </div>
    <div class="form-group ml-1">
        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger  btn-sm" type="submit" value="Delete Comment">
        </form>
    </div>  
       
    @endauth
@endforeach