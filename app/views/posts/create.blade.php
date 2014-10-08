@extends('layouts.master')

@section('content')
<div>
{{ Form::open(array('action' => 'PostsController@store')) }}

{{ Form::label('title', 'Title') }}
{{ Form::text('title') }}

{{ Form::label('body', 'Body') }}
{{ Form::text('body') }}

{{ Form::submit('Click to POST') }}

{{ Form::close() }}
</div>
@stop
