@extends('layouts.app')

@section('content')
    <style>
       .body {
            height: 450px;
            width: 650px;
            font-size: 20px;   
        }

        .title {
            height: 30px;
            width: 300px;
            font-size: 20px;

        }
        .submit {
            font-size: 15px;
        }
    </style>

       {!! Form::open(['action' => ['WebController@update', $post->id] , 'method' => 'POST']) !!}
                <div>
                    {{Form::label('title', 'Title')}}<br>
                    {{ Form::text('title', $post->title, ['class' => 'title', 'placeholder' => ' Set the title...']) }}
                </div><br>

                <div>
                    {{ Form::label('body', 'Blog-it') }}<br>
                    {{ Form::textarea('body', $post->body, ['class' => 'body', 'placeholder' => 'Write your Blog...']) }}
                </div>
                {{ Form::hidden('_method', 'PUT') }}
                {{ Form::submit('Submit', ['class' => 'submit']) }}
       {!! Form::close() !!}
        
@endsection
