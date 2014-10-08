@extends('layouts.master')

@section('title')
Edit Post
@stop

@section('content')
    {{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'class' => 'form-horizontal', 'method' => 'PUT' )) }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}

    {{ Form::label('body', 'Body') }}
    {{ Form::text('body') }}

    {{ Form::submit('Click to Update') }}
    {{ Form::close() }}

@stop
