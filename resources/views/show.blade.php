<x-app-layout>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center"
        style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
        <div class="absolute bg-purple-400"></div>
        <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
            <div class="text-center">
                <h2 class="mt-5 text-3xl font-bold text-gray-900">
                    Add a comment!
                </h2>
                <p class="mt-2 text-sm text-gray-400">Please enter your comment below.</p>
            </div>
            <div class="container">
        <img src="{{$post->image}}" alt="">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p>Par {{ $post->user->name }}</p>
        <hr>
        <h4>Commentaires</h4>

            @foreach ($post->comments as $comment)
                <div class="mb-2">
                    <p>{{ $comment->content }}</p>
                    <small>Par {{ $comment->user->name }}</small>
                </div> 
            @endforeach

        @auth
            <form action="{{ route('commentStore', $post->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="content" class="form-label">Your comment</label>
                    <br>
                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add your comment</button>
            </form>
        @endauth
    </div>
</x-app-layout>
