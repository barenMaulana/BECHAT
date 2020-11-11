<div>
    <div class="container">
            @foreach ($galleries->sortDesc() as $gallery)
                <div class="row d-flex justify-content-around pt-3">
                    <div class="col-12 col-md-8 shadow bg-white">
                        <div class="user-identity">
                            <img src="{{ Storage::url($gallery->users->image) }}" class=" img-profile-beranda">
                            <div class="text-muted">{{ $gallery->users->name }}</div>
                        </div>
                        <hr>
                        <div class=" mb-3 mt-3">
                            <img src="{{ Storage::url($gallery->image) }}" class="card-img-top img-beranda">
                                <div class="card-body">
                                <h5 class="card-title">{{ $gallery->title }}</h5>
                                <p class="card-text">{{ $gallery->deskripsi }}</p>
                                <p class="card-text"><small class="text-muted">{{ $gallery->created_at->diffForHumans() }}</small></p>
                                <hr>
                                    <div class="row text-center">
                                        @auth
                                        <div class="col">
                                            <button wire:click="addLike({{ $gallery->id }})" class="btn btn-link">Like <div class="badge badge-primary">{{ $gallery->likes }}</div></button>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('comment',$gallery->id) }}">Comment</a>
                                        </div>
                                        @endauth
                                        @guest
                                        <div class="col">
                                            <a class="btn btn-link" href="{{ route('login') }}">Like <div class="badge badge-primary">{{ $gallery->likes }}</div></a>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('login') }}">Comment</a>
                                        </div>
                                        @endguest
                                        <div class="col">
                                            <a href="#">Share</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div></button>
</div>
