<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comment;
use App\Models\User;
use App\Models\Place;
use Faker\Generator as Faker;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            // 'place_id' => $place['place_id'],
            'comment' => $this->faker->realText(500),
            'status' => $this->faker->boolean(95)
        ];
    }
}
