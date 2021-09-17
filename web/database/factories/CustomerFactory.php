<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_customer' => $this->faker->unique()->name(),
            'email_customer' => $this->faker->email(),
            'address_customer' => $this->faker->address(),
            'phone_customer'  => $this->faker->phoneNumber(),
            'city_customer'  => $this->faker->city()
        ];
    }
}
