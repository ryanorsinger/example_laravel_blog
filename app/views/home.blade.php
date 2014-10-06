@extends('layouts.master')

@section('title')
    Welcome Home
@stop

@section('topscript')
@stop

@section('content')
<div>
    <h1>Welcome Home!</h1>

    <h2>{{ HTML::linkRoute('portfolio', 'Portfolio') }}</h2>
    <h2>{{ HTML::linkRoute('resume', 'Resume') }}</h2>

    <div>
        <img src="/assets/images/elvis.jpg">
    </div>
</div>
@stop

@section('bottomscript')
@stop
