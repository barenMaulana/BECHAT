<div>
    <div class="card-body">
        <form wire:submit.prevent="addStudent" class="form">
            <div class="form-group">
                <input type="text" name="name" wire:model="name" class="form-control">
                @error('name') <span class="error alert-danger rounded">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
