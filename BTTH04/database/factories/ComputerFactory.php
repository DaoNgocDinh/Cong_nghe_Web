<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'computer_name' => 'Lab ' . $this->faker->numberBetween(1, 5) . ' - PC ' . $this->faker->numberBetween(1, 30),
            'model' => $this->faker->randomElement([
                'Dell',
                'Lenovo',
                'HP',
                'Asus',
                'Acer',
            ]),
            'operating_system' => $this->faker->randomElement([
                'Windows 10',
                'Windows 11',
                'Ubuntu 20.04',
                'Ubuntu 22.04',
                'macOS Monterey',
            ]),
            'processor' => $this->faker->randomElement([
                'Intel i5',
                'Intel i7',
                'AMD Ryzen 5',
                'AMD Ryzen 7',
                'Apple M1',
            ]),
            'memory' => $this->faker->randomNumber([8, 16, 32, 64]),
            'available' => $this->faker->boolean(80),
        ];
    }
}
