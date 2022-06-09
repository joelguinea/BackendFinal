<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TshirtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tshirtBrand' => $this->faker->randomElement(["Nike","Hanes","Everlane","Madewell","Calvin"]),
            'fitType' => $this->faker->randomElement(["Male","Female"]),
            'size' => $this->faker->randomElement(["Small","Medium","Large","Extra Large"]),
            'price' => $this->faker->randomElement(["800","1000","1500","2000"])
        ];
    }     
}
