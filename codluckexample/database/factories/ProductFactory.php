<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(100),
            'slug'=>$this->faker->text(100),
            'price'=>$this->faker->randomDigit(),
            'category_id'=>1,
            'user_id'=>1,
        ];
    }
}
