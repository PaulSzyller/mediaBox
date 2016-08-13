@extends('layouts.master')

@section('title')
    MediaBox | Login Page
@stop

@section('style')

@stop

@section('content')
    <div class="container" id="login-page">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-2">

                <div class="card card-block">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="h2-responsive text-xs-center">Login</h2>
                            <hr>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            {{ Form::open(array('action' => 'AuthenticationController@loginUser', 'method' => 'POST')) }}
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


                                @if(Session::has('error_message'))
                                    <div class="md-form text-capitalize">
                                        <div class="alert red-text m-l-2" role="alert">
                                            {{Session::get('error_message')}}
                                        </div>
                                    </div>
                                @endif

                                <div class="md-form form-group row">
                                    <div class="col-xs-6 text-xs-left">
                                        <p>Don't have an account?<br><a data-toggle="modal" data-target="#modal-register">Sign Up</a></p>
                                    </div>
                                    <div class="col-xs-6 text-xs-right">
                                        <button type="submit" class="btn btn-primary text-xs-right">Login</button>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>

                    @if(Session::has('validation_messages'))
                        <div class="row" style="max-height: 250px; overflow: scroll;">
                        @foreach(Session::get('validation_messages')->all() as $message)
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endforeach
                        </div>
                @endif

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
                    <a href="#!" class="btn-floating btn-fb btn-small disabled" disabled><i class="fa fa-facebook"></i></a>
                    <a href="#!" class="btn-floating btn-gplus btn-small disabled" disabled><i class="fa fa-google-plus"></i></a>
                </div>
                <!--Body-->
                <div class="modal-body">

                    {{ Form::open(array('action' => 'RegistrationController@signUp', 'method' => 'POST')) }}
                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="username" name="username" class="form-control validate">
                                <label for="username">Your username</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="fname" name="fname" class="form-control validate">
                                <label for="fname">First name</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="lname" name="lname" class="form-control validate">
                                <label for="lname">Last name</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="email" name="email" class="form-control validate">
                                <label for="email" data-error="Invalid">Your email</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="password" name="password" class="form-control validate">
                                <label for="password">Your password</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="confirm_password" name="confirm_password"
                                       class="form-control validate">
                                <label for="confirm_password">Repeat password</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-globe prefix"></i>
                                <input type="text" id="location" name="location" class="form-control validate">
                                <label for="location">Your location</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-birthday-cake prefix"></i>
                                <input type="date" id="dob" name="dob" class="form-control datepicker">
                                <label for="dob">Date of Birth</label>
                            </div>

                            <div class="md-form m-b-2 p-b-3">
                                <h5>Gender:</h5>

                                <fieldset class="form-group">
                                    <input class="with-gap" name="gender" type="radio" id="male" value="male">
                                    <label for="male">Male</label>
                                </fieldset>

                                <fieldset class="form-group">
                                    <input class="with-gap" name="gender" type="radio" id="female" value="female">
                                    <label for="female">Female</label>
                                </fieldset>

                                <fieldset class="form-group">
                                    <input class="with-gap" name="gender" type="radio" id="other" value="other" checked="checked">
                                    <label for="other">Unspecified</label>
                                </fieldset>
                            </div>

                            <div class="md-form">
                                <select class="mdb-select validate" name="question">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="favorite_food">Favorite Food?</option>
                                    <option value="favorite_movie">Favorite Movie?</option>
                                    <option value="birth_city">Birth City?</option>
                                    <option value="mother_maiden_name">Mother's Maiden Name?</option>
                                </select>
                                <label>Verification Question</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-check prefix"></i>
                                <input type="text" id="answer" name="answer" class="form-control">
                                <label for="answer">Verification Answer</label>
                            </div>
                            <div class="text-xs-center">
                                <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
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