<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Renter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->randomElement(['Dell', 'HP', 'Apple', 'Lenovo', 'Asus']),
            'model' => $this->faker->word(2, true),
            'specifications' => $this->faker->word(4, true),
            'rental_status' => $this->faker->boolean(60),
            'renter_id' => Renter::inRandomOrder()->first()->id,
        ];
    }
}
