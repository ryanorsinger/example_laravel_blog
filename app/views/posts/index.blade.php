@extends('layouts.master')

@section('title')
    Blog Post Index
@stop

@section('content')
<h1>Welcome to my blog.</h1>
<h2>This is the index of all blogs</h2>

    @foreach($posts as $post)
            <p>Title: {{{ $post->title }}}</p>
            <p>Body: {{{ $post->body }}}</p>
    @endforeach
@stop
