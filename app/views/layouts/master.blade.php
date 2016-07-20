<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('css/mdb.css')}}
    {{HTML::style('css/colors.css')}}
    {{HTML::style('css/fonts.css')}}
    {{HTML::style('css/styles.css')}}

    <title>@yield('title')</title>
    <style>@yield('style')</style>
</head>
<body>
    <header>
        @include('widgets.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer goes here -->
    </footer>

    {{HTML::style('js/bootstrap.js')}}
    {{HTML::style('js/mdb.js')}}
    {{HTML::style('js/tether.js')}}
</body>
</html>