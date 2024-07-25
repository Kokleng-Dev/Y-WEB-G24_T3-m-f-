@extends('layouts.master')
@push('title')
    Home Page
@endpush
@section('content-title')
<div class="row">
    <div class="col-sm-6">
        <h3 class="mb-0">Home</h3>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        </ol>
    </div>
</div> <!--end::Row-->
@endsection
@section('content')
    <h2>Content Home page</h2>
@endsection


@section('css')
    <style>
        body{
            background: red !important;
        }
    </style>
@endsection
