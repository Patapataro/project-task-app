<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class TaskList extends Component
{
    public $project_id;
    public $tasks = [];

    protected $listeners = [
        'selectedProject' => 'fetchTasks',
        'newTask' => 'refreshTasks',
    ];

    public function fetchTasks($project_id)
    {
        if($project_id != null) {
            $project = Project::find($project_id);
            $this->project_id = $project->id;
            $this->tasks = $project->tasks;
        }
    }

    public function refreshTasks()
    {
        $this->tasks = Project::find($this->project_id)->tasks;
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
