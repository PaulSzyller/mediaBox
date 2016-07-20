@extends('layouts.master')

@section('title')
    MediaBox | Login Page
@stop

@section('style')

@stop

@section('content')
    <div class="container" id="login-page">
        <div class="col-xs-12 col-md-6">
            <br><br>
            <h2 class="text-xs-center">MediaBox</h2>
            <p class="text-xs-center"><em>a central multimedia storage system</em></p>
            <hr>
            <br>
            <p>Welcome to the Media Management System. Our goal is to provide you a central system to store all your favorite media collectables. Whether
                it's vinyls, movies, video games, or books, we will keep track of your collection!</p>
            <br><br>
            <p>During development, if you are redirect to this page, that view has not been created yet.</p>
        </div>
        <div class="col-xs-12 col-md-6">
            <br>
            <div class="card card-block">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="card-title text-xs-center">Login</h2>
                        <hr>
                        <br>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12">
                        {{ Form::open(['action' => 'AuthenticationController@loginUser', 'method' => 'POST']) }}
                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="username" name="username" class="form-control">
                            <label for="username">Username</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="password" name="password" class="form-control">
                            <label for="password">Password</label>
                        </div>
                        <div class="md-form form-group row">
                            <div class="col-xs-6 text-xs-left">
                                <p>Don't have an account?<br><a data-toggle="modal"
                                                                data-target="#modal-register">Sign Up</a></p>
                            </div>
                            <div class="col-xs-6 text-xs-right">
                                <a href="" class="btn btn-primary btn-lg text-xs-right">Login</a>
                            </div>

                        </div>
                        {{ Form::close() }}
                    </div>
                </div>

            </div>
        </div>

    </div>




    <!-- Modal Register -->
    <div class="modal fade modal-ext" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3><i class="fa fa-user"></i> Register with:</h3>
                    <a href="" class="btn-floating btn-fb btn-small"><i class="fa fa-facebook"></i></a>
                    <a href="" class="btn-floating btn-gplus btn-small"><i class="fa fa-google-plus"></i></a>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control">
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form3" class="form-control">
                        <label for="form3">Your password</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form4" class="form-control">
                        <label for="form4">Repeat password</label>
                    </div>

                    <div class="text-xs-center">
                        <button class="btn btn-primary btn-lg">Sign up</button>

                        <fieldset class="form-group">
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1">Subscribe me to the newsletter</label>
                        </fieldset>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="options">
                        <p>Already have an account? <a data-dismiss="modal">Log in</a></p>
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>


@stop