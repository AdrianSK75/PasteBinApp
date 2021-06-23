@extends('layouts.app')



@section('content')
    <style>
        .body-show {
            text-align: center;
        }
    </style>
    <a href = "/">Back</a>
    <div class = 'body-show'>
        <h1> {{ $post->title }}</h1>
    </div>
    <div class = 'body-show'>
        <small> Created at {{ $post->created_at }}</small>
    </div>
    <div class = 'body-show'>
        <h4> {{ $post->body }}</h4>
    </div><br>
    <hr>
    <a href = '{{ $post->id }}/edit'>Edit</a>

    {!! Form::open(['action' => ['WebController@destroy', $post->id]]) !!}
            {{ Form::submit('Delete') }}
            {{ Form::hidden('_method', 'DELETE') }}
    {!! Form::close() !!}
@endsection