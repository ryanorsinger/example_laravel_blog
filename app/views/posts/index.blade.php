f@extends('layouts.master')

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

<div class="col-xs-8">
<div>
</div>
    @foreach($posts as $post)
        <article>
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
            <p>{{{ $post->body }}}</p>
            <a class="btn btn-success btn-xs" href="{{{ action('PostsController@edit', $post->id) }}}"><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit Post</a>

            <button class="btn btn-danger delete-btn btn-xs" data-post-id="{{{ $post->id }}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Delete</button>

            {{ Form::close() }}
        </article>

    @endforeach
    {{-- this is a comment in blade --}}
    {{ $posts->appends(array('search' => $search))->links() }}

</div>
<div class="col-xs-4" id="sidebar" role="navigation">
    {{ Form::open(array('action' => array('PostsController@index'), 'class' => 'form-horizontal', 'method' => 'GET')) }}

    {{ Form::text('search', null, array('placeholder' => 'Search Posts')) }}

    {{ Form::submit('Search') }}

    {{ Form:: close() }}
    <br>
    <a href="{{{ action('PostsController@create') }}}"><button type="button" class="pink btn btn-primary btn-lg btn-block">Create New Post</button></a>

    <div>
        <br>
       <img class="centered"src="/img/amorcito.jpg">
    </div>
</div>

    {{ Form::open(['method' => 'DELETE', 'id' => 'delete-form']) }}
    {{ Form::close() }}

@stop

@section('bottomscript')
    <script type="text/javascript">
        $('.delete-btn').click(function() {

            var postId = $(this).data('post-id');

            $("#delete-form").attr('action', '/posts/' + postId);

            if (confirm('Are you sure you want to delete this post?')) {
                $("#delete-form").submit();
            }
        });

    </script>

@stop
