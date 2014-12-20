@extends('layouts.master')

@section('content')

    <h1>Input location information</h1>

 {{ Form::open(array('action' => 'LocationsController@store', 'class' => 'form-horizontal')) }}

    <div class="form-group">
        {{ Form::label('title', 'Post Title', array('class' => 'col-sm-2 control-label')) }}

    <div class="col-sm-10">
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}

    </div>
</div>

<div class="form-group">
    {{ Form::label('body', 'Post Body', array('class' => 'col-sm-2 control-label')) }}

    <div class="col-sm-10">
        {{ Form::textarea('body', Input::old('body'), array('rows' => '10', 'class' => 'form-control')) }}
    </div>
</div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Create Post', array('class' => 'btn btn-primary')) }}
            </div>
        </div>

    {{ Form::close() }}



@stop
