<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

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
            'title' => $this->faker->text(20),
            'price' => $this->faker->numberBetween(100,200),
            'description' => $this->faker->text(200),
            'category_id' => function(){
                return Category::orderBy(DB::raw('RAND()'))->first()->id;
            },
        ];
    }
}
