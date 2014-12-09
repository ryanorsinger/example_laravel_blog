<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.include_header')
    @yield('css')
    @yield('topscript')

    <link rel="stylesheet" type="text/css" href="/css/stone.css">
    <link type="application/atom+xml" rel="alternate" href="/posts.atom">
    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="/js"></script>
</head>
<body>

    @include('partials.stone-navbar')

    <div id="content">
        @yield('content')
    </div>


@yield('bottomscript')
@include('layouts.include_footer')

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '']);
  _gaq.push(['_trackPageview']);

  (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();
</script>

</body>
</html>




