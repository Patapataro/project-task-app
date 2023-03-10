<div class="px-6 py-8 border-b border-gray-300">
    <h2 class="text-xl mb-4">CREATE A PROJECT</h2>
    <!-- @error('name') <span class="error mx-4 text-red-600">{{ $message }}</span> @enderror -->
    <div class="flex mx-4">
        <div class="border-b border-gray-300 inline-block w-full">
            <input wire:keydown.enter="submit" wire:model="name" data-cy="new-project-input" name="project-name" type="text" placeholder="New Project" class="w-full border-none">
        </div>

        <button wire:click="submit" data-cy="new-project-submit" class="px-4 py-2 border-b border-gray-300 bg-green-500 shadow-md text-white">CREATE</button>
    </div>
</div>