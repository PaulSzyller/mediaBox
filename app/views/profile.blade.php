@extends('layouts.master')

@section('title')
    MediaBox | User Profile
@stop

@section('style')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card card-block">
                    <h4 class="card-title">Username</h4>
                    <p>{{$user->username}}</p>
                    <hr>
                    <h4 class="card-title">Email</h4>
                    <p>{{$user->email}}</p>
                    <hr>
                    <h4 class="card-title">Password</h4>
                    <p>*****</p>
                    <hr>
                    <h4 class="card-title">First Name</h4>
                    <p>{{$user->first_name}}</p>
                    <hr>
                    <h4 class="card-title">Last Name</h4>
                    <p>{{$user->last_name}}</p>
                    <hr>
                    <h4 class="card-title">Profile Picture</h4>
                    <p>{{$user->profile_pic}}</p>
                    <hr>
                    <h4 class="card-title">Location</h4>
                    <p>{{$user->location}}</p>
                    <hr>
                    <h4 class="card-title">Date of Birth</h4>
                    <p>{{$user->dob}}</p>
                    <hr>
                    <h4 class="card-title">Security Question</h4>
                    <p>*****</p>
                    <hr>
                    <h4 class="card-title">Security Answer</h4>
                    <p>*****</p>
                    <hr>
                    <h4 class="card-title">Gender</h4>
                    <p>{{$user->gender}}</p>
                </div>
            </div>
        </div>
    </div>
@stop