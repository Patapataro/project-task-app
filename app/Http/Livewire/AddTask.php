<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Task;

class AddTask extends Component
{
    public $name;
    public $project_id;

    protected $listeners = ['selectedProject'];

    public function selectedProject($project_id = null)
    {
        $this->project_id = $project_id;
    }

    public function addTask()
    {
        $project = Project::find($this->project_id);
        $max = 1;

        // Return validation error here.
        if($project == null)
        {
            $this->reset('name');
            return;
        }

        if($project->tasks != null)
        {
            $max += $project->tasks()->max('priority');
        }

        $task = new Task([
            'project_id' => $this->project_id,
            'priority' => $max,
            'name' => $this->name
        ]);

        $task = $project->tasks()->save($task);
        
        $this->reset('name');
        $this->emit('refreshTasks');

    }

    public function render()
    {
        return view('livewire.add-task');
    }
}
