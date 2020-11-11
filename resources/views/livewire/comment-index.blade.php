<div>
    <button wire:click.prefetch="show" class="btn btn-outline-dark">
        Baaa...
    </button>
    @if ($baa)
        hey there!
    @endif

    <div wire:poll.1000ms="hitung">
        <h3 class="bg-primary rounded text-center text-white">{{ $nomor }}</h3>
    </div>
    @if (session()->has('pesan'))
        <div class="alert alert-danger mb-5">
            {{ session('pesan') }}
        </div>
    @endif
    @forelse ($comments as $comment)
        <livewire:comment-single :comment="$comment" :key="$comment->id" />
    @empty
        Belum ada komentar | jadilah yang pertama 
    @endforelse

</div>
