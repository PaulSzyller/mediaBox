@extends('layouts.master')

@section('title')
    MediaBox | User Dashboard
@stop

@section('style')
@stop

@section('content')
    <div class="container" id="dashboard">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card card-block">
                            <h4 class="card-title">Vinyl</h4>
                            <p class="card-text"></p>
                            <a href="{{ URL::to('vinyl') }}" class="card-link">View Library</a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card card-block">
                            <h4 class="card-title">Movies</h4>
                            <p class="card-text"></p>
                            <a href="{{ URL::to('movie') }}" class="card-link">View Library</a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card card-block">
                            <h4 class="card-title">Video Games</h4>
                            <p class="card-text"></p>
                            <a href="#" class="card-link">View Library</a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="card card-block">
                            <h4 class="card-title">Books</h4>
                            <p class="card-text"></p>
                            <a href="#" class="card-link">View Library</a>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xs-12 col-md-6" id="media_stats">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h4>Media Statistics</h4>
                        <hr style="max-width: 50% !important;">
                    </div>
                    <div class="col-xs-12">
                        <canvas id="media_chart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop