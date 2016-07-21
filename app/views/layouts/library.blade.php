@extends('layouts.master')

@section('title')
    @yield('title')
@stop

@section('style')
    @yield('style')
@stop

@section('content')
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
@stop