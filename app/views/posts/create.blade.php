@extends('layouts.master')
@section('page-head')
    <h1 class="page-header">Create a New Post</h1>
@stop

@section('content')

    {{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal', 'files' => true )) }}

        @include('posts.form')

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
            </div>
        </div>

    {{ Form::close() }}
@stop
