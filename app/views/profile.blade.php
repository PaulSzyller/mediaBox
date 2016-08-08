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
    </div>
@stop