@extends('layouts.master')

@section('content')
    <h1>Show Post</h1>

    <p>{{{ $post->title }}}</p>
    <p>{{{ $post->body }}}</p>
@stop
