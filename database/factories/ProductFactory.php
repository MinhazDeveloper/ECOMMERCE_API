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
    public function definition(): array
    {
        
        return [
            'name' => $this->faker->word(), // পণ্যের নাম
            'detail' => $this->faker->sentence(10), // ১০ শব্দের ডিটেইল
            'price' => $this->faker->numberBetween(100, 10000), // ১০০-১০,০০০ টাকার মধ্যে
            'stock' => $this->faker->numberBetween(1, 100), // ১-১০০ পিস স্টক
            'discount' => $this->faker->numberBetween(0, 50), // ০-৫০% ডিসকাউন্ট
        ];
    }
}
