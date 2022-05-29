<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//!
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit(),
            'gorivo_id' => $this->faker->randomDigit(),
            'pogon_id' => $this->faker->randomDigit(),
            'stanje_id' => $this->faker->randomDigit(),
            'photo_id' => $this->faker->randomDigit(),
            // 'slug' => $this->faker->firstName(),
            'proizvodjac' => $this->faker->firstName(),
            'model' => $this->faker->firstName(),
            'kilometraza' =>  $this->faker->randomDigit(),
            'kubikaza' =>  $this->faker->randomDigit(),
            'oznaka' => $this->faker->unique()->firstName(),
            'cijena' =>   $this->faker->randomDigit(),
            'lokacija' => $this->faker->unique()->firstName(),
            'godiste' =>  $this->faker->randomDigit(),
            'snaga' =>  $this->faker->randomDigit(),
            'boja' => $this->faker->unique()->colorName(),
            'mijenjac' => $this->faker->unique()->firstName(),
            'opis' => Str::random(25),
        ];
    }
}
