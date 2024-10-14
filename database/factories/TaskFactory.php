<?php

namespace Database\Factories;

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['pending', 'completed']),
        ];
    }
}
