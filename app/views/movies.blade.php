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
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">By Favorite</a>
                    <a class="dropdown-item" href="#">By Rating</a>
                </div>
            </div>
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
                        <th>Rating</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td></td>
                    </tr>
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

                <form method="POST" action="/addMovie">
                    <button type="submit" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$result['title']}}</h4>
                        <p class="list-group-item-text">{{explode('-', $result['release_date'])[0]}}
                        <br> <img src="{{$result['poster_path']}}" />
                        <br> {{ $result['id'] }}

                        </p>
                    </button>



                </form>

            @endforeach
        </ul>
    @endif
@stop
