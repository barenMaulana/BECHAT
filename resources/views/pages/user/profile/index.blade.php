@extends('layouts.user')

@section('title')
Profil kamu
@endsection

@section('content')

<div class="container">
    <div class="row d-flex justify-content-around pt-3">
        <div class="col-12 col-md-7 shadow d-flex justify-content-center bg-white">
            <div class="jumbotron jumbotron-fluid jumbotron-custom-profile">
            </div>
            @foreach ($profiles as $profil)
            <div class="card m-5 card-profile-custom bg-white" style="width: 15rem;">
                <img src="{{ Storage::url($profil->image) }}" class="card-img-top img-profile">
                <div class="card-body">
                    <h5 class="card-title">{{ $profil->name }}</h5>
                    <p class="card-text text-muted">Email : {{ $profil->email }}</p>
                    <a href="{{ route('profile.edit',$profil->id) }}" class="btn btn-primary"> <i class="fa fa-pen"></i> edit </a>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-12 col-md-3 shadow p-4 right-side-postingan bg-white">
            <div class="card bg-white" style="width: 15rem;">
                <ul class="list-group">
                    <li class="list-group-item active">Menu</li>
                    <li class="list-group-item"><a href="{{ route('gallery.index') }}">Posting sesuatu</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row m-5">
    <div class="col col-12">
        <div class="p-4">
            <h4>Postingan kamu :</h4>
        </div>
    </div>
</div>

<div class="container">
    <div class="row d-flex justify-content-around pt-3">
        @forelse ($galleries as $gallery)

        <div class="col-12 col-md-3 shadow m-2 bg-white">
            <div class=" mb-3 mt-3">
                <img src="{{ Storage::url($gallery->image) }}" class="card-img-top img-profil-postingan">
                <div class="card-body">
                    <h5 class="card-title">{{ $gallery->title }}</h5>
                    <p class="card-text">{{ $gallery->deskripsi }}</p>
                    <p class="card-text"><small class="text-muted">{{ $gallery->created_at->diffForHumans() }}</small></p>
                    <form action="{{ route('gallery.destroy',$gallery->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-link" onclick="return-confirm('data akan dihapus?')">Hapus postingan ini</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>

        @empty
        <div class="row">
            <div class="col col-12 text-center">
                Anda belum posting apapun
            </div>
        </div>
        @endforelse
    </div>
</div>

@endsection