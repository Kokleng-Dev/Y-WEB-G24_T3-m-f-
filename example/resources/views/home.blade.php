@extends('layouts.master')
@push('title')
    Home Page
@endpush
@section('content')

    <h2>Content Home page</h2>
    <p>
        {{ $name }} 
        @if($isChild == true)
            : child
        @endif
    </p>

    {{-- @php
        $x = 16;
        $bool = false;
    @endphp  --}}
   
    {{-- @if($bool == true)
        <p>{{ $x }}</p>
        <h2>Hello world</h2>
    @elseif($x > 15)
        <p>yes </p>
    @else
        <p>False</p>
    @endif --}}

    {{-- @for ($i = 0; $i < 5; $i++)
        @if($i % 2 == 0)
            <p>Hello</p>
        @endif
    @endfor --}}

    @php
        $data = ['asd','asd'];
    @endphp

    {{-- @foreach ($data as $index => $item)
        <p>{{$index}} : {{$item}}</p>
    @endforeach

    @if(count($data) == 0)
        <p>No Data</p>
    @endif --}}
    
    {{-- @forelse ($data as $index => $item)
        <p>{{$index}} : {{$item}}</p>
    @empty
        <p>No Data</p>
    @endforelse --}}

    {{-- @php
        $i = 5;
    @endphp
    @while ($i > 0)
        {{ $i }}
        @php
            $i--;   
        @endphp
    @endwhile --}}
{{-- 
    @switch($type)
        @case(1)
            
            @break
        @case(2)
            
            @break
        @default
            
    @endswitch --}}



@endsection

@section('css')
    <style>
        body{
            background: red !important;
        }
    </style>
@endsection
