<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cinema;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'director' => $this->faker->name(),
            'release_date' => $this->faker->date(),
            'duration' => $this->faker->numberBetween(60, 240),
            'cinema_id' => Cinema::inRandomOrder()->first()->id,
        ];
    }
}
