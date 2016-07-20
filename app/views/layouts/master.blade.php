<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

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
        @if ( Auth::check() )
            @include('widgets.navbar_loggedin')
        @else
            @include('widgets.navbar_loggedout')
        @endif
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer goes here -->
    </footer>

    {{HTML::script('js/jquery-2.2.3.js')}}
    {{HTML::script('js/tether.js')}}
    {{HTML::script('js/bootstrap.js')}}
    {{HTML::script('js/mdb.js')}}
</body>
</html>