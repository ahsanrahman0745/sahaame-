<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      
            $fakername=$this->faker->name;
        return [
            'first_name' => $fakername,
            'last_name' =>  $this->faker->name,
            'postal_code' => $this->faker->randomDigit,
            'number' => $this->faker->randomDigit,
            'b_email' => $this->faker->unique()->email,
            'business_name' => $this->faker->name,
        ];
    
    }
}