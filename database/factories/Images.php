<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Place;
use App\Models\Images;
use Faker\Generator as Faker;
use Intervention\Image\Facades\Image;

$factory->define(Images::class, function (Faker $faker, array $place) {
    
    $id = $faker->uuid;
    $img = $faker->image(storage_path('places') . $place['place_id'] . '/', 1920, 866, null, false);
    $id = $faker->uuid;
    Image::make(storage_path('places') . $place['place_id'] . '/' . $img)->fit(640, 853, function ($constraint) {
        $constraint->aspectRatio();
    })->orientate()->save(storage_path('places') . $place['place_id'] . '/' . $id . '-mobile.jpg');
    
    rename(storage_path('places') . $place['place_id'] . '/' . $img, storage_path('places') . $place['place_id'] . '/' . $id . '.jpg');

    return [
        'uuid' => $id,
        'place_id' => $place['place_id'],
        'user_id' => $place['user_id'],
        'status' => 1
    ];
});
