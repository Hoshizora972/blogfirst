@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>{{ $rowPost->title }}</h1>
        <p>{{ $rowPost->content }}</p>
        <p>Par {{ $rowPost->user->name }}</p>
        <hr>
        <h4>Commentaires</h4>

            @forelse ($rowPost->comments as $comment)
                <div class="mb-2">
                    <p>{{ $comment->content }}</p>
                    <small>Par {{ $comment->user->name }}</small>
                </div> 
                @empty
                    No posts available
            @endforelse

        @auth
            <form action="{{ route('commentStore', $rowPost->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="content" class="form-label">Your comment</label>
                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add your comment</button>
            </form>
        @endauth
    </div>

@endsection
