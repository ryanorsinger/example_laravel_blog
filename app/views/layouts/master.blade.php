<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.include_header')
    @yield('css')
    @yield('topscript')
</head>
<body>
<div class="container">

@yield('body')
@yield('content')

</div>
@yield('bottomscript')
@include('layouts.include_footer')
</body>
</html>
