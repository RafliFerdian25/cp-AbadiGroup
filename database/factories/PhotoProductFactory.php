<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoProduct>
 */
class PhotoProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => fake()->numberBetween(1, Product::count()),
            'photo' => 'assets/product/TQfHc7GaZG620HBSUEYFXvAiKm1NzhXRwx7mp6lo.jpg',
        ];
    }
}
