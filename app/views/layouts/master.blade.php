<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('css/mdb.css')}}

    <title>@yield('title')</title>
    <style>@yield('style')</style>
</head>
<body>
    @yield('content')

    {{HTML::style('js/bootstrap.js')}}
    {{HTML::style('js/mdb.js')}}
    {{HTML::style('js/tether.js')}}
</body>
</html>