@extends('layouts.master')

@section('title')
    MediaBox | User Profile
@stop

@section('style')
@stop

@section('content')
    @foreach($arr as $a)
            <p>{{$a}}</p>
    @endforeach
@stop