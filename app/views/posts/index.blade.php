@extends('layouts.master')

@section('title')
    Blog Post Index
@stop

@section('content')
@if (Session::has('message'))
    {{{ Session::get('message') }}}
@endif
<div class="blog-header">
    <h1 class="blog-title">Blog Posts</h1>
    <p class="lead blog-description">Index of Posts</p>
</div>

<div class="col-md-8">
<div>
</div>
    @foreach($posts as $post)
        <article>
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
            <p>{{{ $post->body }}}</p>
            <a class="btn btn-success btn-xs" href="{{{ action('PostsController@edit', $post->id) }}}"><i class="glyphicon glyphicon-edit"></i>Edit Post</a>

            {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) }}
                <button type="submit">Delete</button>

            {{ Form::close() }}
        </article>

    @endforeach
{{ $posts->links() }}
</div>
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
    {{ Form::open(array('action' => array('PostsController@index'), 'class' => 'form-horizontal', 'method' => 'GET')) }}

    {{ Form::text('search', null) }}

    {{ Form::submit('Search') }}

    {{ Form:: close() }}
<br>
    <a href="{{{ action('PostsController@create') }}}"><button type="button" class="btn btn-primary btn-lg btn-block">Create New Post</button></a>

    <div>
        <br>
       <img src="/img/amorcito.jpg">
    </div>
</div>
@stop

