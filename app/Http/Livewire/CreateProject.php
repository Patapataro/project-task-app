<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class CreateProject extends Component
{
    public $name;

    protected $rules = [
        'name' =>'required'
    ];

    public function submit()
    {
        $this->validate();
        
        $project = Project::create([
            'name' => $this->name
        ]);

        $this->reset('name');

        $this->emit('createdProject', $project->id);
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
