<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(News::class, function (Faker $faker) {
    return [
        'id' => $faker->uuid,
        'title' => $faker->sentence(),
        'body' => $faker->text(300),
        'summary' => $faker->paragraph(2),
        'created_at' => $faker->dateTime(),
        'user_id' => User::all()->random()->id
    ];
});
