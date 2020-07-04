<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\User;
use App\Models\Place;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker, array $place) {
    return [
        'user_id' => User::all()->random()->id,
        'place_id' => $place['place_id'],
        'comment' => $faker->realText(500),
        'status' => $faker->boolean(95)
    ];
});
