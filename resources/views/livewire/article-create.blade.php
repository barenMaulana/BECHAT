<div>
    <div wire:loading wire:target="addArticle">
        <div class="loading-ui">
            <h1>Menambahkan article baru...</h1>
        </div>
    </div>    

    <div class="row d-flex justify-content-around">
        <div class="col col-md-4 p-3 rounded">
            <form wire:submit.prevent="addArticle">
                <div class="form-group">
                    <input wire:model="title" type="text" class="form-control" placeholder="Title">
                    @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <textarea wire:model="body" cols="30" rows="10" class="form-control" placeholder="content"></textarea>
                    @error('body') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-outline-info">Save</button>
            </form>
        </div>
        <div class="col col-md-7 pt-3 pb-3 rounded">
            <div class="card">
                <div class="card-body">
                    <h2>
                        {{ $title }}
                    </h2>
                    <p>
                        {{ $body }}
                    </p>
                    <button wire:click="$toggle('like')" class="btn btn-link">Love</button>
                    <div class="badge badge-primary">{{ $like }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
