@extends('layouts.app')
@section('title')
    Livewire | Articles
@endsection
@section('content')
<div class="container-utama">
    <div class="container">
    <a href="{{ url('article/create') }}" class="btn btn-link"> Write some article </a>
        <h1 class="mb-2">Article :</h1>
        <livewire:article-index>
    </div>
</div>
@endsection