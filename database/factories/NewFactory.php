<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

$factory->define(News::class, function (Faker $faker) {
    $id = $faker->uuid;
    Storage::makeDirectory('news/'.$id);
    $body = $faker->realText(1000);
    $body .= '<p>&nbsp;</p>';
    $body .= $faker->realText(2000);
    $body .= '<p>&nbsp;</p>';
    $body .= $faker->realText(1000);
    $new = $faker->image('public/storage/news/' . $id . '/', 1920, 866, null, false);
    Image::make('public/storage/news/'.$id.'/'.$new)->resize(665, null, function($constraint){
        $constraint->aspectRatio();
    })->orientate()->save('public/storage/news/'.$id.'/'.$id.'-card.jpg');
    rename ('public/storage/news/'.$id.'/'.$new, 'public/storage/news/'.$id.'/'.$id.'.jpg');
    return [
        'id' => $id,
        'title' => $faker->realText(100),
        'body' => $body,
        'summary' => $faker->realText(500),
        'created_at' => $faker->dateTime(),
        'user_id' => User::all()->random()->id
    ];
});
