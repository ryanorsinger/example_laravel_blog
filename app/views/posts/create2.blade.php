@extends('layouts.master')

@section('content')
<div>
    <h1>Create a blog post!</h1>
    <form method="POST" id="blog-create" role="form" action="{{{ action('PostsController@store') }}}">
        <div class="form-group">
            <label for="blog-title" class="col-sm-2 control-label">Blog Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name='title' value="{{{ Input::old('title') }}}" id="blog-title" placeholder="Blog Title">
            </div>
          </div>
          <div class="form-group">
            <label for="blog-body" class="col-sm-2 control-label">Blog Contents</label>
            <div class="col-sm-10">
              <textarea class="form-control" name='body' id="blog-body" placeholder="Blog Post">{{{ Input::old('body') }}}</textarea>
            </div>
          </div>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Save Post</button>
              {{ $errors->first('<span class="help-block">:message</span>') }}

            </div>
          </div>
    </form>

</div>
@stop
