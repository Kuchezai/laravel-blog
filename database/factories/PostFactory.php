<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(55),
            'body' => $this->faker->realText(255),
            'image' => $this->faker->image(Storage::disk('public')->path('/images/'),400,300, null, false),
            //faker image is now broken
            'user_id' => 1
        ];
    }
}
