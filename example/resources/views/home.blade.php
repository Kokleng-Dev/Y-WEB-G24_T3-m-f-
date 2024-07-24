@extends('layouts.master')

@section('content')
    <h2>Hello Home Page</h2>
    <p>Hello</p>
    @include('home2')
@endsection


@section('css')
    <style>
        body{
            background: red !important;
        }
    </style>
@endsection
