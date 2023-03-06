<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class TaskList extends Component
{
    public $tasks = [];

    protected $listeners = ['updateProject' => 'mount'];


    public function mount($project_id = null)
    {
        if($project_id != null) {
            $this->tasks = Project::find($project_id)->tasks;
        }
    }

    public function render()
    {
        return view('livewire.task-list');
    }
}
