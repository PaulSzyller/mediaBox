@extends('layouts.library')

@section('title')
    MediaBox | Movie Library
@stop

@section('style')

@stop

@section('table-section')

    <div class="row">
        <div class="col-xs-6">
            <h2>Movies Library</h2>
           <!-- <div class="btn-group">
                <button type="button" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">By Favorite</a>
                    <a class="dropdown-item" href="#">By Rating</a>
                </div>
            </div> -->
        </div>

        <div class="col-xs-6 text-xs-right">
            Add Movie<a class="btn-floating red"><i class="fa fa-plus right"></i></a>
        </div>
        <hr>
    </div>

    <div class="row"><br></div>

    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Release Date</th>
                        <th>User Rating</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i=1 ?>
                    @foreach($movies as $movie)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->genre }}</td>
                            <td>{{ $movie->release_date }}</td>
                            <td>
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $movie->user_rating)
                                        <a><i onclick="changeStarColor()" class="fa fa-star text-primary"
                                              aria-hidden="true"></i></a>
                                    @else
                                        <a><i onclick="changeStarColor()" class="fa fa-star-o" aria-hidden="true"></i></a>
                                    @endif
                                @endfor
                            </td>
                        </tr>
                    @endforeach



                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-xs-12">
            <nav class="text-xs-center">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade modal-ext" id="modal-addmovie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 id="modal-movie-title"><i class="fa fa-user"></i>MovieTitle</h3>
                </div>
                <!--Body-->
                <div class="modal-body">

                    <div class="row">
                        <div class="col-xs-4">
                            <div class="row">
                                <p>
                                    <img src="#" id="modal-movie-poster-path" class="img-fluid">
                                </p>
                            </div>
                        </div>

                        <div class="col-xs-8">
                            <h5>Overview</h5>
                            <p id="modal-movie-overview">Overview</p>

                            <h5>Release Date</h5>
                            <p id="modal-movie-release-date">ReleaseDate</p>
                        </div>
                    </div>

                    {{ Form::open(array('action' => 'MovieController@addMovie', 'method' => 'POST')) }}
                    <div class="text-xs-center">
                        <input id="add-movie-button" type="hidden" name="id" value="id">
                        <button type="submit" class="btn btn-primary btn-lg">Add movie</button>
                    </div>
                    {{ Form::close() }}
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
@stop

@section('search-section')
    <h2>Search</h2>
    <hr>
    <form class="form-inline" method="POST" action="/searchMovies">
        <input class="form-control" type="text" placeholder="Search by title" name="title">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

@stop

@section('search-result')
    @if (Session::get('search_result'))
        <ul class="list-group">
            @foreach(Session::get('search_result') as $result)

                <!--<form method="POST" action="/addMovie">
                    <button type="submit" class="list-group-item"> -->
                <a class="list-group-item" data-remote="false" data-toggle="modal" data-target="#modal-addmovie"
                   data-movie-title="{{$result['title']}}" data-movie-overview="{{$result['overview']}}"
                   data-movie-release-date="{{$result['release_date']}}" data-movie-poster-path="{{$result['poster_path']}}"
                   data-movie-id="{{$result['id']}}">
                    <h4 class="list-group-item-heading">{{$result['title']}}</h4>
                    <p class="list-group-item-text">{{explode('-', $result['release_date'])[0]}}</p>
                </a>
                <!--
                    </button>
                </form> -->

            @endforeach
        </ul>
    @endif
@stop
