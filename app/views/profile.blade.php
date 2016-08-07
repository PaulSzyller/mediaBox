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
                <div class="card card-block">
                    <h5 class="card-title">Username</h5>
                    <p>{{$user->username}}</p>
                    <hr>
                    <h5 class="card-title">Email</h5>
                    <p>{{$user->email}}</p>
                    <hr>
                    <h5 class="card-title">First Name</h5>
                    <p>{{$user->first_name}}</p>
                    <hr>
                    <h5 class="card-title">Last Name</h5>
                    <p>{{$user->last_name}}</p>
                    <hr>
                    <h5 class="card-title">Profile Picture</h5>
                    <p>not implemented</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="card card-block">
                    <h5 class="card-title">Location</h5>
                    <p>{{$user->location}}</p>
                    <hr>
                    <h5 class="card-title">Date of Birth</h5>
                    <p>{{$user->dob}}</p>
                    <hr>
                    <h5 class="card-title">Security Question</h5>
                    <p>*****</p>
                    <hr>
                    <h5 class="card-title">Gender</h5>
                    <p>{{$user->gender}}</p>
                    <hr>
                    <h5 class="card-title">Layout</h5>
                    <p>default</p>
                </div>
            </div>
        </div>
    </div>
@stop