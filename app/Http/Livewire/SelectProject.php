<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class SelectProject extends Component
{
    public $projects = [];

    public $project_id;

    protected $listeners = ['updateProject' => 'mount'];

    public function mount($project_id = null)
    {
        $this->projects = Project::all();
        $this->project_id = $project_id;
    }

    public function delete()
    {
        $project = Project::find($this->project_id);
        $project->delete();

        $this->mount();
    }
}
