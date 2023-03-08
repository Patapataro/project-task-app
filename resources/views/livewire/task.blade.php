<li wire:sortable.item="{{ $task->id }}" class="p-2 border flex justify-between border-gray-300">
    <span wire:sortable.handle>{{ $task->name }}</span>
    <button wire:click="delete" data-cy="delete-task" class="px-4 text-red-500 font-bold font-sans">X</button>
</li>