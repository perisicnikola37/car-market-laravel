<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//!
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'file' =>  $this->faker->image('public/storage/images',640,480, null, false),
        ];
    }
}
