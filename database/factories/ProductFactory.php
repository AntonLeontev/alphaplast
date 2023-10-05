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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'slug' => $this->faker->sentence(2),
            'thumbnail' => 'https://placekitten.com/150/180',
            'category_id' => Category::inRandomOrder()->first()->id,
            'part_number' => $this->faker->word(1),
            'diameter' => $this->faker->randomElement([50, 60, 65, 80, 90, 100, 105]),
            'throat_diameter' => $this->faker->numberBetween(15, 20),
            'height' => $this->faker->randomElement([150, 200, 250]),
            'price' => $this->faker->numberBetween(2, 60),
            'volume' => $this->faker->randomElement([150, 250, 350, 500, 700, 1000]),
            'weight' => $this->faker->numberBetween(10, 40),
        ];
    }
}
