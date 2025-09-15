<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(10000, 100000),
            'description' => $this->faker->sentence(10),
        ];
    }
}
