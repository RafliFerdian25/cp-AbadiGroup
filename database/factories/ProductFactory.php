<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name' => fake()->name(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomNumber(9, true),
            'length' => fake()->randomNumber(2),
            'breadth' => fake()->randomNumber(2),
            'depth' => fake()->randomNumber(2),
            'speed' => fake()->randomNumber(2),
            'main_engine' => fake()->randomNumber(2),
            'number_of_engine' => fake()->randomNumber(2),
            'category_id' => fake()->numberBetween(1, Category::count())
        ];
    }
}