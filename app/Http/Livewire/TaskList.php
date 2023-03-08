<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Task;

class TaskList extends Component
{
    public $project_id;
    public $tasks = [];

    protected $listeners = [
        'selectedProject' => 'fetchTasks',
        'refreshTasks',
    ];

    public function fetchTasks($project_id = null)
    {
        if($project_id != null) {
            $project = Project::find($project_id);
            $this->project_id = $project->id;
            $this->tasks = $project->tasks->sortBy('priority');
        }
        else{
            $this->reset('tasks');
        }
    }

    public function refreshTasks()
    {
        $this->tasks = Project::find($this->project_id)->tasks;
    }

    public function reorder($orderdIds)
    {
        foreach($orderdIds as $orderId){
            $task = Task::find($orderId['value']);
            $task->priority = $orderId['order'];
            $task->save();
        }
        $this->refreshTasks();
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
