<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use App\Models\Admin;
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
    $new = $faker->image(storage_path('news') . $id . '/', 1920, 866, null, false);
    Image::make(storage_path('news').$id.'/'.$new)->resize(665, null, function($constraint){
        $constraint->aspectRatio();
    })->orientate()->save(storage_path('news').$id.'/'.$id.'-card.jpg');
    rename (storage_path('news').$id.'/'.$new, storage_path('news').$id.'/'.$id.'.jpg');
    return [
        'uuid' => $id,
        'title' => $faker->realText(100),
        'body' => $body,
        'summary' => $faker->realText(500),
        'created_at' => $faker->dateTime(),
        'admin_id' => Admin::all()->random()->id
    ];
});
