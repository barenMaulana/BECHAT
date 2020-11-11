@extends('layouts.comment')
@section('title')
    comment page
@endsection
@section('content')
    <div class="container-utama">
        <div class="container">
            <div class="row mt-4">
                <div class="col col-md-4">
                    <div class="card">
                        <p class="text-center bg-secondary text-white">komentar</p>
                        <div class="card-body">
                            <livewire:comment-index>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class="card">
                        <p class="text-center bg-secondary text-white">Tulis Komentar</p>
                        <div class="card-body">
                            <livewire:comment-create>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection