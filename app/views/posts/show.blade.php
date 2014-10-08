@extends('layouts.master')

@section('content')
    <h1>Show Post - This is my show.blade.php</h1>

    <p>{{{ $post->title }}}</p>
    <p>{{{ $post->body }}}</p>

    {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) }}
                <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i><br>Delete</button>
    {{ Form::close() }}
@stop
