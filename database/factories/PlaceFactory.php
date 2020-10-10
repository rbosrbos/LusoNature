<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use App\Models\City;
use App\Models\Images;
use App\Models\Place;
use App\Models\User;
use App\Models\Comment;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class PlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Place::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $place_id = $this->faker->uuid;
        $user_id = User::all()->random()->id;
        Storage::makeDirectory('places/' . $place_id);
        $body = $this->faker->realText(1000);
        $body .= '<p>&nbsp;</p>';
        $body .= $this->faker->realText(2000);
        $body .= '<p>&nbsp;</p>';
        $body .= $this->faker->realText(1000);
        return [
            'uuid' => $place_id,
            'user_id' => $user_id,
            'name' => $this->faker->streetName,
            'description' => $body,
            'parking' => $this->faker->boolean(),
            'restaurants' => $this->faker->boolean(),
            'wc' => $this->faker->boolean(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude,
            'categories_id' => Category::all()->random()->id,
            'cities_id' => City::all()->random()->id,
            'status' => $this->faker->boolean(90)
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Place $place) {
            $place->images()->createMany(
                //factory(Images::class, 3)->make(['place_id' => $place->uuid, 'user_id' => $place->user_id])->toArray()
                Images::factory()->times(3)->make(['place_id' => $place->uuid, 'user_id' => $place->user_id])->toArray()
            );
            $place->comments()->createMany(
                //factory(Comment::class, 20)->make(['place_id' => $place->id])->toArray()
                Comment::factory()->times(20)->make(['place_id' => $place->id])->toArray()
            );
        });
    }
}
