<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'our_des' => $this->faker->word(),
            'user_des' => $this->faker->word(),
            'regionFormat' => $this->faker->word(),
            'status' => $this->faker->word(),
            'date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
