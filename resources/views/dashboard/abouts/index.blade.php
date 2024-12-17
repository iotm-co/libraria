@extends('layouts.app', ['title' => 'About Us'])
@section('content')
    <div class="container-fluid">
        <div style="height: calc(100vh - 100px);" class="d-flex justify-content-center align-items-center bg-transparent">
            <img src="{{ asset('assets/img/raining.png') }}" alt="book_lover" class="img-fluid shadow rounded-lg"
                style="width: 40%;">
        </div>
    </div>
@endsection
