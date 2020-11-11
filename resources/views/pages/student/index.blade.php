@extends('layouts.app')
@section('title')
    Belajar Laravel | Liveware
@endsection
@section('content')
<div class="container">
    <div class="container-utama">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student</div>
                        <livewire:student-create>
                    <div class="card-body">
                        <livewire:student-index>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection