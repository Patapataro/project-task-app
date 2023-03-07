<ul class=" mx-auto">
    @foreach($tasks as $task)
        @livewire('task', ['task' => $task], key($task->id))
    @endforeach
</ul>