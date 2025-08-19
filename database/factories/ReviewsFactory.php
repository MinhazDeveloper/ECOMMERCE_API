<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->first()->id ?? Product::factory(), 
            // যদি আগে থেকে Product থাকে তাহলে random product_id দিবে
            'customer' => $this->faker->name(),
            'review' => $this->faker->sentence(20), // ২০ শব্দের রিভিউ
            'star' => $this->faker->numberBetween(1, 5), // রেটিং ১-৫ এর মধ্যে
        ];
    }
}
