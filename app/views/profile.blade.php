@extends('layouts.master')

@section('title')
    MediaBox | User Profile
@stop

@section('style')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Username</h5>
                <p>{{$user->username}}</p>
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Email</h5>
                <p>{{$user->email}}</p>
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">First Name</h5>
                <p>{{$user->first_name}}</p>
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Last Name</h5>
                <p>{{$user->last_name}}</p>
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Profile Picture</h5>
                @if ($user->profile_pic)
                    <p>{{$user->profile_pic}}</p>
                @else
                    <p>None</p>
                @endif
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Location</h5>
                @if ($user->location)
                    <p>{{$user->location}}</p>
                @else
                    <p>Not Set</p>
                @endif
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Date of Birth</h5>
                <p>{{$user->dob}}</p>
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Security Question</h5>
                <p>{{$user->question}}</p>
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Gender</h5>
                <p>{{$user->gender}}</p>
                <hr>
            </div>
            <div class="col-xs-12 col-md-6">
                <h5 class="card-title">Layout</h5>
                @if ($user->layout)
                    <p>{{$user->layout}}</p>
                @else
                    <p>Default</p>
                @endif
                <hr>
            </div>
        </div>
        <div class="col-xs-6 text-xs-left">
            <a data-toggle="modal" data-target="#modal-register">Edit Information</a></p>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade modal-ext" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <h3><i class="fa fa-user"></i> Edit Profile Information:</h3>
                </div>
                <!--Body-->
                <div class="modal-body">

                    {{ Form::open(array('action' => 'ProfileController@updateProfile', 'method' => 'POST')) }}
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="username" name="username" class="form-control">
                        <label for="username">Your username</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="fname" name="fname" class="form-control">
                        <label for="fname">First name</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="lname" name="lname" class="form-control">
                        <label for="lname">Last name</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" id="email" name="email" class="form-control">
                        <label for="email">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password">Your password</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                        <label for="confirm_password">Repeat password</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-globe prefix"></i>
                        <input type="text" id="location" name="location" class="form-control">
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
                            <input class="with-gap" name="gender" type="radio" id="other" value="other">
                            <label for="other">Unspecified</label>
                        </fieldset>
                    </div>

                    <div class="md-form">
                        <select class="mdb-select" name="question">
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
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
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