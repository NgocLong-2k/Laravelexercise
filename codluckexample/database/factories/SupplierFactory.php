<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(100),
            'city'=>$this->faker->city,
            'country'=>$this->faker->country,
            'address'=>$this->faker->address,
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
        ];
    }
}
