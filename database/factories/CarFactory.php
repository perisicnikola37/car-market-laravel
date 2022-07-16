<?php

namespace Database\Factories;

use App\Models\Gorivo;
use App\Models\Photo;
use App\Models\Pogon;
use App\Models\Stanje;
use App\Models\User;
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
            'user_id' => User::all()->random(),
            'gorivo_id' => Gorivo::all()->random(),
            'pogon_id' => Pogon::all()->random(),
            'stanje_id' => Stanje::all()->random(),
            'photo_id' => Photo::all()->random(),
            'placeholder_id' => 1,
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
