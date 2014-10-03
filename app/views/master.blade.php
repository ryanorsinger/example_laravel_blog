<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.include_header')
    @include('top-script')
</head>
<body>

@yield('content')

@yield('bottom-script')
@include('layouts.include_footer')
</body>
</html>
