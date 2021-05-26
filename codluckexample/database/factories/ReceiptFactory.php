<?php

namespace Database\Factories;

use App\Models\Receipt;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receipt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_of_receipt'=>$this->faker->dateTime(),
            'user_id'=>$this->faker->numberBetween(1,10),
            'total'=>$this->faker->numberBetween(1,10000),
        ];
    }
}
