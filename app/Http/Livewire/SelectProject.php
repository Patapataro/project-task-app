<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class SelectProject extends Component
{
    public $projects = [];

    public $project_id;

    protected $listeners = ['updateProjects' => 'mount'];

    public function mount()
    {
        $this->projects = Project::all();
    }

    public function delete()
    {
        $project = Project::find($this->project_id);
        $project->delete();

        $this->mount();
    }
}
