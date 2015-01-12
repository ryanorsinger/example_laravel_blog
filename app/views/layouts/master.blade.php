<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.assets.analytics')
    @include('layouts.include_header')
    @yield('css')
    @yield('topscript')
</head>
<body>
@include ('partials.navbar')

@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif
@if (Session::has('warningMessage'))
    <div class="alert alert-warning">{{{ Session::get('warningMessage') }}}</div>
@endif
@if (Session::has('infoMessage'))
    <div class="alert alert-info">{{{ Session::get('infoMessage') }}}</div>
@endif

<div class="container">

    @yield('body')
    @yield('content')

</div>
@yield('bottomscript')
@include('layouts.include_footer')

</body>
</html>
