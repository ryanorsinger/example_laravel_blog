@extends('layouts.master')

@section('title')
    Blog Post Index
@stop

@section('content')
<h1>Welcome to my blog.</h1>

    @foreach($posts as $post)

            <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
            <p>Body: {{{ $post->body }}}</p>
            <p><a href="{{{ action('PostsController@edit', $post->id) }}}">Click to Edit this Post</a>

            {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) }}
                <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i><br>Delete</button>
            {{ Form::close() }}

    @endforeach
@stop

