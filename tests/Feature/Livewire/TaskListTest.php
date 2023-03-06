<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\TaskList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TaskListTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(TaskList::class);

        $component->assertStatus(200);
    }
}
