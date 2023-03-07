<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Task::class);

        $component->assertStatus(200);
    }
}
