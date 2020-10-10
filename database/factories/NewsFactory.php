<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\News;
use App\Models\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = $this->faker->uuid;
        Storage::makeDirectory('news/' . $id);
        $body = $this->faker->realText(1000);
        $body .= '<p>&nbsp;</p>';
        $body .= $this->faker->realText(2000);
        $body .= '<p>&nbsp;</p>';
        $body .= $this->faker->realText(1000);
        $new = $this->faker->image('public/storage/news/' . $id . '/', 1920, 866, null, false);
        Image::make('public/storage/news/' . $id . '/' . $new)->resize(665, null, function ($constraint) {
            $constraint->aspectRatio();
        })->orientate()->save('public/storage/news/' . $id . '/' . $id . '-card.jpg');
        rename('public/storage/news/' . $id . '/' . $new, 'public/storage/news/' . $id . '/' . $id . '.jpg');

        return [
            'uuid' => $id,
            'title' => $this->faker->realText(100),
            'body' => $body,
            'summary' => $this->faker->realText(500),
            'created_at' => $this->faker->dateTime(),
            'admin_id' => Admin::all()->random()->id
        ];
    }
}
