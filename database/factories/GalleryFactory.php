<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
    */
    public function definition()
    {
        return [
            'photo' => fake()->imageUrl(200,200),
            'news_id' => fake()->numberBetween(1, News::count()),
        ];
    }
}