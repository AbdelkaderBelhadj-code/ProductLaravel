<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(20),
            'description' => fake()->text('100'),
            'price' => $this->faker->randomFloat(2, 1, 1000), // Corrected the usage of $this->faker and added randomFloat to generate a decimal price
            'stock' => $this->faker->randomNumber(3), // Corrected the usage of $this->faker
        ];
    }
}
