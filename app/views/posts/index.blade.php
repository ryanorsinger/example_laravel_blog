@extends('layouts.master')

@section('content')
    <h1>Index of Blog Posts</h1>

    @foreach($posts as $post)
            <p>Title: {{{ $post->title }}}</p>
            <p>Body: {{{ $post->body }}}</p>
    @endforeach
@stop
