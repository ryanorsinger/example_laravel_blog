@extends('layouts.master')

@section('top-script')
    <style type="text/css">
        article > header {
            margin-bottom: 20px;
        }
    </style>
@stop

@section('content')
    <article>
        <header>
            <h1>{{{ $post->title }}}</h1>
            <small class="text-muted">posted by Buckaroo Banzai {{{ $post->updated_at->diffForHumans() }}}</small>
        </header>
        <p>{{{ $post->body }}}</p>
    </article>
    <a href="{{{ action('PostsController@index') }}}">Back</a>
    | <a href="{{{ action('PostsController@edit', $post->id) }}}">Edit this Post</a>
@stop
