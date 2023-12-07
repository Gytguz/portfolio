<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryNames = ['Womens', 'Mens', 'Kids'];
        $category = fake()->randomElement($categoryNames);
        $productName = $category . ' ' . fake()->randomNumber(2);

        return [
            'name' => $productName,
            'slug' => Str::slug($productName),
            'category' => $category,
            'details' => fake()->paragraph(1),
            'description' => fake()->paragraph(3),
            'product_code' => 'PC-' . fake()->unique()->randomNumber(2),
            'image' => fake()->imageUrl(),
            'price' => fake()->randomFloat(2, 1, 100),
            'quantity' => fake()->randomNumber(2),
        ];
    }
}
