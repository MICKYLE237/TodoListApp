<?php

namespace Tests\Unit;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_task()
    {
        $task = Task::factory()->create();
        $this->assertEquals('pending', $task->status);

        $this->assertDatabaseHas('tasks', [
            'description' => 'None',
            'status' => 'completed',
        ]);
    }

    /** @test */
    public function it_can_update_task_status()
    {
        $task = Task::factory()->create([
            'status' =>'completed',
        ]);


        $task->update(['status' => 'pending']);

        $this->assertTrue($task->fresh()->status);
    }
}

