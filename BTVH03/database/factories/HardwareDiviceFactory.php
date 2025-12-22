<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ItCenter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HardwareDicive>
 */
class HardwareDiviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'device_name' => $this->faker->word(2, true),
            'type' => $this->faker->randomElement(['Mouse', 'Keyboard', 'Headset']),
            'status' => $this->faker->boolean(),
            'center_id' => ItCenter::inRandomOrder()->first()->id,
        ];
    }
}
