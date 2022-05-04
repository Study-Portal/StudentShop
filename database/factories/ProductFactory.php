<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(1000, 1000),
            'colour' => $this->faker->colorName(),
            'size' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(),
            'category_id' => Category::query()->get('id')->random()
        ];
    }
}
