@extends('layouts.master')

@section('content')


<form method="POST" id="blog-create" role="form" action="{{{ action('PostsController@store') }}}">
    <label for="title">Title: </label>
    <input type="text" name="title" value="{{{ Input::old('title') }}}">

    <label for="body">Body: </label>
    <input type="text" name="body" value="{{{ Input::old('body') }}}">

    <input type="submit" value="submit">
</form>


@stop
