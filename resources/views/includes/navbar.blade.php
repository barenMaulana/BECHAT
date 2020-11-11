<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <a class="navbar-brand" href="{{ route('home') }}">Beranda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            @auth
                <a class="nav-item nav-link" href="{{ route('profile.index') }}">Profil</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" name="logout" class="btn btn-outline-secondary">Logout</button>
                </form>
            @endauth
                
            @guest
                <a class="nav-item nav-link" href="{{ route('login') }}">Masuk</a>
            @endguest
        </div>
    </div>
</nav>