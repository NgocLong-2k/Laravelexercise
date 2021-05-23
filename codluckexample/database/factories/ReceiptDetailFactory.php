<?php

namespace Database\Factories;

use App\Models\ReceiptDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ReceiptDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'receipt_id'=>1,
            'product_id'=>1,
            'price'=>$this->faker->randomDigit(),
        ];
    }
}
