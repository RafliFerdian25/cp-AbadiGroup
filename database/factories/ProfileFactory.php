<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'overview' => fake()->paragraph(),
            'vision' => fake()->paragraph(),
            'mission' => fake()->paragraph(),
            'history' => fake()->paragraph(),
            'address' => fake()->address(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->email(),
        ];
    }
}