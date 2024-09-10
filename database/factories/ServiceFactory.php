<?php

namespace Database\Factories;

use App\Enums\TypeIconServiceEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'min_price' => fake()->randomNumber(2),
            'min_hours' => fake()->randomNumber(1) > 8 ? 8 : fake()->randomNumber(1),
            'percentage' => fake()->randomNumber(2),
            'icon' => fake()->randomNumber(2) % 2 === 0 ? TypeIconServiceEnum::TwfCleaning1 : TypeIconServiceEnum::TwfCleaning2,
            'prosition' => fake()->randomNumber(2),
            'price_room' => fake()->randomNumber(2),
            'hour_room' => fake()->randomNumber(1) > 8 ? 8 : fake()->randomNumber(1),
            'price_living_room' => fake()->randomNumber(2),
            'hour_living_room' => fake()->randomNumber(1) > 8 ? 8 : fake()->randomNumber(1),
            'price_bathroom' => fake()->randomNumber(2),
            'hour_bathroom' => fake()->randomNumber(1) > 8 ? 8 : fake()->randomNumber(1),
            'price_kitchen' => fake()->randomNumber(2),
            'hour_kitchen' => fake()->randomNumber(1) > 8 ? 8 : fake()->randomNumber(1),
            'price_yard' => fake()->randomNumber(2),
            'hour_yard' => fake()->randomNumber(1) > 8 ? 8 : fake()->randomNumber(1),
            'price_other' => fake()->randomNumber(2),
            'hour_other' => fake()->randomNumber(1) > 8 ? 8 : fake()->randomNumber(1),
        ];
    }
}
