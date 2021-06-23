@extends('layouts.app')

@section('content')
    <div class = "b">
        <h1>Posts</h1>
        @if(count($posts) > 0)
            @foreach($posts as $post)
                    <div class = "well">
                        <a href = "/posts/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
                    </div>
            @endforeach
        @else   
            <p> No posts found </p>
        @endif
        <a href = '/posts/create'>Create a blog post</a>
    </div>
@endsection