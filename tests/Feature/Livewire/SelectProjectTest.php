<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\SelectProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SelectProjectTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(SelectProject::class);

        $component->assertStatus(200);
    }
}
