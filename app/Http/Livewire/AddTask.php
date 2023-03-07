<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class AddTask extends Component
{
    public $name;
    public $project_id;

    protected $listeners = ['updateProject' => 'mount'];

    public function mount($project_id)
    {
        $this->project_id = $project_id;
    }

    public function addTask()
    {
        $project = Project::find($this->project_id);
        $max = $project->tasks->max('priority');
        $task = $project->tasks->create([
            'project_id' => $this->project_id,
            'priority' => $max + 1,
            'name' => $this->name,
            'completed' => null,
        ]);
    }

    public function render()
    {
        return view('livewire.add-task');
    }
}
