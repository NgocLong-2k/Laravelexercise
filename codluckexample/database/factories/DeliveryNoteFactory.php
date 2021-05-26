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
            'user_id'=>$this->faker->numberBetween(1,10),
            'total'=>$this->faker->numberBetween(1,1000000),
            'delivery_price'=>$this->faker->numerify(),
        ];
    }
}
