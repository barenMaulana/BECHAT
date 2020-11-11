<div class="container">
    <div class="row">
        <div class="col col-md-4 mt-5 pt-3 pb-3 rounded">
            <h4 class="">Your article :</h4>
            @foreach ($articles as $article)
                <div class="card mt-3 shadow">
                    <div class="card-header bg-primary">
                        <h5 class="text-center text-white">
                            <a href="#" class="text-white"> {{ $article->title }} </a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, magni!</p>
                        <div class="badge badge-primary">
                            {{ $article->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $articles->links() }}
        </div>
    </div>
</div>
