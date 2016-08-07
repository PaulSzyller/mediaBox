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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card card-block">
                            <h4 class="card-title">Change First Name</h4>
                            {{Form::open(['action' => 'ProfileController@updateProfile', 'method'=> 'POST', 'class' => "form"])}}
                            <div>
                                <input type="text" name="first_name">
                            </div>
                            <div>
                                {{Form::submit('Post',['class' => 'btn-primary'])}}
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                    <!--
                    <div class="col-xs-12">
                        <div class="card card-block">
                            <h4 class="card-title">Change Last Name</h4>
                            {{Form::open(['action' => 'ProfileController@updateProfile', 'method'=> 'POST', 'class' => "form"])}}
                            <div>
                                <input type="text" name="last_name">
                            </div>
                            <div>
                                {{Form::submit('Post',['class' => 'btn btn-primary'])}}
                            </div>
                            {{Form::close()}}
                        </div>
                    </div>
                    -->
                </div>


            </div>
        </div>

    </div>
@stop