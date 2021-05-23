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
            'delivery_note_id'=>1,
            'product_id'=>1,
            'quantity'=>1,
            'price'=>$this->faker->randomDigit(),
        ];
    }
}
