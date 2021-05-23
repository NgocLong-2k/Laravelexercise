<?php

namespace Database\Factories;

use App\Models\DeliveryNote;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryNoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryNote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_of_delivery_note'=>$this->faker->dateTime(),
            'customer_id'=>1,
            'user_id'=>1,
            'total'=>$this->faker->randomDigit(),
            'delivery_price'=>$this->faker->randomDigit(),
        ];
    }
}
