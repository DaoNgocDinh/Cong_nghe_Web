<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Library;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
            'author' => $this->faker->name(),
            'publication_year' => $this->faker->year(),
            'genre' => $this->faker->word(),
            'library_id' => Library::inRandomOrder()->first()->id,
        ];
    }
}
