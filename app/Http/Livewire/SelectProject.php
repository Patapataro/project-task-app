<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectProject extends Component
{
    public $projects = [];

    public function mount()
    {
        $this->projects = [
                (object)[
                    'name' => 'Bug Tracker App',
                    'id' => 1
                ],
                (object)[
                    'name' => 'ChatGPT',
                    'id' => 2
                ]
            ];
    }

    public function render()
    {
        return view('livewire.select-project', [
            'projects' => $this->projects,
        ]);
    }
}
