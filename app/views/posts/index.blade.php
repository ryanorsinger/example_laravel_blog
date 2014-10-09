@extends('layouts.master')

@section('title')
    Blog Post Index
@stop

@section('content')
<h4>Blog Index Page</h4>
@if (Session::has('message'))
    {{{ Session::get('message') }}}
@endif

<div class="col-md-8">
<div>
</div>
    @foreach($posts as $post)

            <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
            <p>{{{ $post->body }}}</p>
            <a class="btn btn-success btn-xs" href="{{{ action('PostsController@edit', $post->id) }}}"><i class="glyphicon glyphicon-edit"></i>Edit Post</a>

        {{ Form::open(['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]]) }}
                <button type="submit">Delete</button>

            {{ Form::close() }}


    @endforeach
{{ $posts->links() }}
</div>
<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
    <p>Click the rainbow to create a new post</p>
    <a href="{{{ action('PostsController@create') }}}"><img src="/img/amorcito.jpg"></a>
</div>
@stop

