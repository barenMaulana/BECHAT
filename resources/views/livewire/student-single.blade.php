<div class="media mb-3">
    <div class="media-body">
        <h5 class="mt-0">{{ $student->name }}</h5>
    </div>
    <div class="media-body">
        <div class="badge badge-primary">
            {{ $like }}
        </div>
    </div>
    <button wire:click="addLike" class="btn btn-primary btn-sm">Like</button>
</div>