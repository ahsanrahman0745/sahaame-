<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\businessCategory;
class BusinessCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // $fakername=$this->faker->name;
        // return [
        //     'name' => $fakername,
        //     'slug' => Str::slug($fakername,'-'),
        //     'description' => $this->faker->text,
        // ];
    }
}