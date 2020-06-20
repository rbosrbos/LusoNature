<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\City;
use App\Models\Images;
use App\Models\Place;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

$factory->define(Place::class, function (Faker $faker) {
    $place_id = $faker->uuid;
    $user_id = User::all()->random()->id;
    Storage::makeDirectory('places/' . $place_id);
    $body = $faker->realText(1000);
    $body .= '<p>&nbsp;</p>';
    $body .= $faker->realText(2000);
    $body .= '<p>&nbsp;</p>';
    $body .= $faker->realText(1000);
   
    return [
        'id' => $place_id,
        'user_id' => $user_id,
        'name' => $faker->streetName,
        'description' => $body,
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

$factory->afterCreating(Place::class, function ($place, Faker $faker) {
    $place->images()->createMany(
        factory(Images::class, 3)->make(['place_id' => $place->id, 'user_id' => $place->user_id])->toArray()
    );
});
