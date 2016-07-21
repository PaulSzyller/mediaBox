<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        @include('widgets.navbar_loggedin')
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div class="card card-block">
                    @yield('table-section')
                </div>
            </div>

            <div class="col-xs-4">
                <div class="card card-block">
                    @yield('search-section')
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12">
                <h5>Extra Notes</h5>
                <ol>
                    <li>Maybe make the table headers links that sort the table based on that table header</li>
                    <li>Need to add functinality to click on Movie Title and it displays more information</li>
                    <li>Could have statistics about each library here or on the side where the search currently is</li>
                    <li>Search functionality could display a list in the right card panel that the user selects
                        from</li>
                    <li>Need to add a form modal for user to input movie information</li>
                    <li>Move/Delete filter dropdown</li>
                    <li>Only show a max number of entries per screen and use paganation to go to next set of
                        entries in table</li>
                </ol>

            </div>
        </div>

    </div>
</main>

<footer>
    <!-- Footer goes here -->
</footer>

<!-- These files need to stay in this order -->
{{HTML::script('js/jquery-2.2.3.js')}}
{{HTML::script('js/tether.js')}}
{{HTML::script('js/bootstrap.js')}}
{{HTML::script('js/mdb.js')}}
{{HTML::script('js/init.js')}}

<!-- Custom JavaScript files go here -->

</body>
</html>