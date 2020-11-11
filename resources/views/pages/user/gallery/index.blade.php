@extends('layouts.user')
@section('title')
Gallery
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
                <form action="{{ route('gallery.store') }}" method="post" class="form shadow p-4 mt-5 bg-white rounded" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-5">
                                <input type="hidden" name="likes" value="0">
                                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" required class="form-control">
                                </div>
                                <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" cols="10" rows="5" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                <label for="image">Pilih gambar</label>
                                <input type="file" name="image" required class="form-control">
                                </div>
                                <button type="submit" class="btn btn-link">Posting</button>
                        </div>
                </form>
        </div>
@endsection

