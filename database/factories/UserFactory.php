<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $avatar = $this->faker->boolean(95);
        $id = $this->faker->uuid;
        if ($avatar) {
            $new = $this->faker->image('public/storage/avatars/', 70, 70, null, false);
            rename('public/storage/avatars/' . $new, 'public/storage/avatars/' . $id . '.jpg');
        }
        return [
            'id' => $id,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('123456'), // password
            'remember_token' => Str::random(10),
            'avatar' => $avatar
        ];
    }
}
