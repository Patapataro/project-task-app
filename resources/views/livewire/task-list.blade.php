<ul wire:sortable="reorder" data-cy="task-list" class="mx-auto">
    @foreach($tasks as $task)
        @livewire('task', ['task' => $task], key($task->id))
    @endforeach
</ul>