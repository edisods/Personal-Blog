<div class="card">
    <div class="card-header">
        <h5 class="text-center">Create new post</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="send">
            <div class="mb-4">
              <label class="form-label" for="form4Example1" class="text-muted">Post title</label>
              <input type="text" wire:model="title" id="form4Example1" class="form-control" />
              @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>
            
            <div class="mb-4">
                <label class="form-label" for="customFile" class="text-muted">Add photo</label>
                <input type="file" wire:model="photo" class="form-control" id="customFile" />
                @error('photo') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
              <label class="form-label" for="form4Example3" class="text-muted">Post content</label>
              <textarea class="form-control" wire:model="text" id="form4Example3" rows="4"></textarea>
              @error('text') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-success btn-block mb-4">Create post</button>
        </form>
    </div>
</div>