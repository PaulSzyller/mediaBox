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
                @yield('search-result')
            </div>

        </div>
    </div>
@stop
