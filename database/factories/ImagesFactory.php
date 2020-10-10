<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Place;
use App\Models\Images;
use Faker\Generator as Faker;
use Intervention\Image\Facades\Image;

class ImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Images::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = $this->faker->uuid;
        return [
            'uuid' => $id,
            // 'place_id' => $this->place_id,
            // 'user_id' => $this->user_id,
            'status' => 1
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Images $image) {
            $img = $this->faker->image('public/storage/places/' . $image->place_id . '/', 1920, 866, null, false);

            Image::make('public/storage/places/' . $image->place_id . '/' . $img)->encode('jpg', 75)->fit(640, 853, function ($constraint) {
                $constraint->aspectRatio();
            })->orientate()->save('public/storage/places/' . $image->place_id . '/' . $image->uuid . '-mobile.jpg');

            rename('public/storage/places/' . $image->place_id . '/' . $img, 'public/storage/places/' . $image->place_id . '/' . $image->uuid . '.jpg');
        });
    }
}
