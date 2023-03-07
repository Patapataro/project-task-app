<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class SelectProject extends Component
{
    public $projects = [];
    public $project_id;

    protected $listeners = ['createdProject' => 'mount'];

    public function mount($project_id = null)
    {
        $this->projects = Project::all();
        if($project_id != null)
        {
            $this->project_id = $project_id;
        }
    }

    public function delete()
    {
        $project = Project::find($this->project_id);
        $project->delete();

        $this->mount();
    }

    public function updatedProjectId()
    {
        $this->emit('selectedProject', $this->project_id);
    }
}
