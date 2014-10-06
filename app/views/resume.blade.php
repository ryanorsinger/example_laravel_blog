@extends('layouts.master')
@section('content')
    <h1>My Excellent Resume</h1>
    <h2>View my awesome portfolio here: {{ HTML::linkRoute('portfolio', 'Portfolio') }}</h2>
@stop
