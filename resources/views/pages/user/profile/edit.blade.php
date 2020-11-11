@extends('layouts.user')
@section('title')
    Update page
@endsection
@section('content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('profile.update',$profiles->id) }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body bg-white mt-4 shadow rounded">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" required value="{{ $profiles->name }}">
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="form-control" value="{{ $profiles->image }}">
                    </div>
                    <button type="submit" class="btn btn-link">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection