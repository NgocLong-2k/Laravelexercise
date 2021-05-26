<?php

namespace Database\Factories;

use App\Models\DeliveryNoteDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryNoteDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryNoteDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'delivery_note_id'=>$this->faker->numberBetween(1,10),
            'product_id'=>$this->faker->numberBetween(1,10),
            'quantity'=>$this->faker->numberBetween(1,1000),
            'price'=>$this->faker->numerify(),
            'tax'=>$this->faker->numerify(),
        ];
    }
}
