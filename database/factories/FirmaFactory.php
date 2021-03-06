<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FirmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             // Initialize all Firma faker attributes that are in Firma datbase
            'name' => $this->faker->company(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
        ];
    }
}
