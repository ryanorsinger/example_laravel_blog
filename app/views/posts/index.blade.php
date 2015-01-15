@extends('layouts.master')

@section('title')
    Blog Post Index
@stop

@section('content')
@if (Session::has('message'))
    {{{ Session::get('message') }}}
@endif
<div class="blog-header">
    <h1 class="blog-title">Articles</h1>
</div>

<div class="col-xs-6">
    <div class="blog-header">
        <h3 class="blog-title">Articles</h3>
    </div>

    @foreach($posts as $post)
        <article>
            <p><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></p>
            <p>{{{ $post->body }}}</p>
            @foreach($post->images as $image)
                <img src="{{ "/img/" . $image->filename }}">
            @endforeach
            <a class="btn btn-success btn-xs" href="{{{ action('PostsController@edit', $post->id) }}}"><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit Post</a>

            <button class="btn btn-danger delete-btn btn-xs" data-post-id="{{{ $post->id }}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Delete</button>

            {{ Form::close() }}
        </article>
    @endforeach
</div>

<div class="col-xs-6" id="sidebar">
    <div class="blog-header">
        <h3 class="blog-title">Projects</h3>
        <a href="http://www.protor.us"><h5 class="projects">Protor.us</h5></a>
        <p class="project-description">Screencasts and tutorials that walk through solving real problems, what to do  when you don't know what to do next, and how to approach coding challenges. </p>

    </div>
    <div class="blog-header">
        <h3 class="blog-title">Resources</h3>
        <p class="projects">Tips and Tricks</p>
        <p class="projects">Tools I recommend</p>
        <p class="project-description">Recommended reading</p>
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
