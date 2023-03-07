<div class="flex pb-4 mx-4">
    <div class="border-b border-gray-300 inline-block w-full">
        <input wire:bind="name" type="text" placeholder="New Task" class="w-full border-none">
    </div>
    <button wire:click="addTask" class="px-4 py-2 border-b border-gray-300 bg-blue-500 shadow-md text-white">ADD</button>
</div>