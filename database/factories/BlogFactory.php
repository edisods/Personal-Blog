<?php

namespace Database\Factories;
use App\Models\Blog;
use App\Models\User;
use Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'photo' => $this->faker->imageUrl(),
            'text' => $this->faker->text(),
            'user_id'=>User::all()->random()->id
        ];
    }
}
