@extends('layouts.app')
@section('title')
    Livewire | Articles
@endsection
@section('content')
<div class="container-utama">
    <div class="container">
        <h1 class="mb-2">Write Article</h1>
        <livewire:article-create>
    </div>
</div>
@endsection