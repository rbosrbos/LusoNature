<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\City;
use App\Models\Place;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'user_id' => User::all()->random()->id,
        'name' => $faker->streetName,
        'description' => $faker->realText(150),
        'parking' => $faker->boolean(),
        'restaurants' => $faker->boolean(),
        'wc' => $faker->boolean(),
        'latitude' => $faker->latitude(),
        'longitude' => $faker->longitude,
        'categories_id' => Category::all()->random()->id,
        'cities_id' => City::all()->random()->id,
        'status' => $faker->boolean(95)
    ];
});
