@extends('layouts.master')

@section('content')
  {{ Form::open(array('url'=>'form-submit','files'=>true)) }}

  {{ Form::label('file','File',array(class'=>'')) }}
  {{ Form::file('file','',array('class'=>'')) }}
  <br/>
  <!-- submit buttons -->
  {{ Form::submit('Save') }}

  <!-- reset buttons -->
  {{ Form::reset('Reset') }}

  {{ Form::close() }}
@stop
