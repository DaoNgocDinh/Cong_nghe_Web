<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Computer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Issue>
 */
class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'computer_id' => Computer::inRandomOrder()->first()->id,
            'reported_by' => $this->faker->name(),
            'reported_date' => $this->faker->dateTimeThisYear(),
            'description' => $this->faker->sentence(12),
            'urgency' => $this->faker->randomElement(['Low', 'Medium', 'High']),
            'status' => $this->faker->randomElement(['Open', 'In Progress', 'Resolved']),
        ];
    }
}
