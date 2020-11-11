<div>
    <form wire:submit.prevent="addComment" class="form form-inline">
        <div class="form-group">
            <input type="text" class="form-control" name="comments" wire:model="comments" required>
            <button type="submit" class="btn btn-secondary">Komen</button>
        </div>
    </form>
</div>
