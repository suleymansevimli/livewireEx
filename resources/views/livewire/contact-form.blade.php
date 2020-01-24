<div>
    <form wire:submit="submit">
        <input type="text" wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror

        <input type="text" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Contact</button>
    </form>
</div>
