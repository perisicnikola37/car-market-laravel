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
            'file' => 'https://www.b92.net/news/pics/2021/01/27/36159110760112972d8760366853581_orig.jpg',
        ];
    }
}
