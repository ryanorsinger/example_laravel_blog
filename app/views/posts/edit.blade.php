@extends('layouts.master')

@section('title')
Edit Post
@stop
@section('page-head')
    <h1 class="page-header">Edit &ldquo;{{{ $post->title }}}&rdquo;</h1>
@stop

@section('content')
    {{ Form::model($post, array('action' => ['PostsController@update', $post->id], 'class' => 'form-horizontal', 'method' => 'PUT' )) }}

        @include('posts.form')

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Update Post', array('class' => 'btn btn-primary')) }}
            </div>
        </div>

    {{ Form::close() }}
@stop
