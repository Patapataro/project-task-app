<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CreateProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateProjectTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(CreateProject::class);

        $component->assertStatus(200);
    }
}
