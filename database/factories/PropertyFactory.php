<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence,
            'description'=>$this->faker->sentence,
            'surface'=>$this->faker->numberBetween(50,500),
            'rooms'=>$this->faker->numberBetween(1,10),
            'bedrooms'=>$this->faker->numberBetween(1,5),
            'floor'=>$this->faker->numberBetween(50,500),
            'price'=>$this->faker->numberBetween(50,500),
            'city'=>$this->faker->city,
            'address'=>$this->faker->address,
            'postal_code'=>$this->faker->numberBetween(100,1000),
            'sold'=>0,
        ];
    }
}
