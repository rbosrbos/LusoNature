<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $avatar = $faker->boolean(95);
    $id = $faker->uuid;
    if ($avatar) {
        Storage::makeDirectory('avatars');
        $new = $faker->image(storage_path('avatars'), 70, 70, null, false);
        rename (storage_path('avatars').$new, storage_path('avatars').$id.'.jpg');
    }
    return [
        'id' => $id,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'), // password
        'remember_token' => Str::random(10),
        'avatar' => $avatar
    ];
});
