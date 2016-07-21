@extends('layouts.master')

@section('title')
    MediaBox | Movie Library
@stop

@section('style')

@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <div class="card card-block">
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
                </div>
            </div>

            <div class="col-xs-4">
                <div class="card card-block">
                    <h2>Seach</h2>
                    <hr>
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Search by title">
                        <button class="btn btn-primary">Search</button>
                    </form>
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