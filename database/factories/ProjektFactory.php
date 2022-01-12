<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjektFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Initialize all Projekt faker attributes that are in Projekt datbase
            'name' => $this->faker->name(),
            'start' => $this->faker->date(),
            'end' => $this->faker->date(),
            'budget' => $this->faker->numberBetween(2000, 1000000),
            'status' => $this->faker->numberBetween(0,1),
        ];
    }
}
