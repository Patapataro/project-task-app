<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task as TaskModel;

class Task extends Component
{
    public TaskModel $task;

    public function mount(TaskModel $task)
    {
        $this->task = $task;
    }

    public function delete()
    {
        $this->task->delete();
        $this->emitup('refreshTasks');
    }

    public function render()
    {
        return view('livewire.task');
    }
}
