@extends('layouts.user')

@section('title')
    Halaman personal user
@endsection

@section('content')
    <div class="container">
        <h1>
            selamat datang {{ Auth::user()->name }}
        </h1>
    </div>
@endsection