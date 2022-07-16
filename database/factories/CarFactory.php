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
use Faker\Generator as Faker;

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

        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();


        return [
            'user_id' => User::all()->random(),
            'gorivo_id' => Gorivo::all()->random(),
            'pogon_id' => Pogon::all()->random(),
            'stanje_id' => Stanje::all()->random(),
            'file' => '1657974408mazda2015.jpg',
            // 'slug' => $this->faker->firstName(),
            'proizvodjac' => $v['brand'],
            'model' => $v['model'],
            'kilometraza' =>  $this->faker->biasedNumberBetween(99000,320000, 'sqrt'),
            'kubikaza' =>  $this->faker->biasedNumberBetween(1200,6000, 'sqrt'),
            'oznaka' => $this->faker->unique()->firstName(),
            'cijena' =>   $this->faker->biasedNumberBetween(400,10000, 'sqrt'),
            'lokacija' => 'Podgorica',
            'godiste' =>   $this->faker->biasedNumberBetween(1998,2022, 'sqrt'),
            'snaga' =>  $this->faker->randomDigit(),
            'boja' => $this->faker->unique()->colorName(),
            'mijenjac' => $this->faker->unique()->firstName(),
            'opis' => Str::random(25),
        ];
    }
}
