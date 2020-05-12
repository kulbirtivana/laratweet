@extends('layout')

@section('title')
Comment
@endsection

@section('content')

@include('partials.errors')

<div class="container-fluid">
    <div class="column h-100 justify-content-center align-items-center">

<div class="card">

    <section>
         <div class="card-body">

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
    </div>

        <div class="float-right" id="app">
            <comment-edit-form submission-url="{{ route( 'comments.update', $comment->id) }}" v-model="content">
                @csrf
                @method('PATCH')
            </comment-edit-form>
            <Giphy v-on:image-clicked="imageClicked" />
        </div>
    </div>

<!-- <form method="post" action="{{ route( 'comments.update', $comment->id) }}">

<div class="form-group">

    @csrf {{-- cross site request forgery. a security mesaure --}}
    
    @method('PATCH')

    <label for="content">
        <strong> Comment content: </strong>
        <br>
        <textarea name="content" id="content" cols="30" rows="10">{{ $comment->content }}</textarea>
    </label>
    </div>

    <div class="form-group container h-80">
    <input class="btn btn-success" type="submit" value="Update your comment">
    </div>
    </form>  -->

        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <input class="btn btn-warning" type="submit" value="Delete Comment">
     </div>
    </div>
</form>

</div>

@endsection