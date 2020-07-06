<?php

use App\Models\Place;
use Illuminate\Database\Seeder;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $used = [];
        for ($i = 0; $i < 150; $i++) {
            $user_id = User::all()->random()->id;
            $place_id = Place::all()->random()->id;
            $new = [
                'user_id' => $user_id,
                'place_id' => $place_id
            ];
            while (in_array($new, $used)) {
                $user_id = User::all()->random()->id;
                $place_id = Place::all()->random()->id;
                $new = [
                    'user_id' => $user_id,
                    'place_id' => $place_id
                ];
            }
            array_push($used,$new);
            $rating = new Rating;
            //$rating->id = Str::uuid();
            $rating->user_id = $user_id;
            $rating->place_id = $place_id;
            $rating->access = rand(0, 5);
            $rating->giftshops = rand(0, 5);
            $rating->location = rand(0, 5);
            $rating->restaurants = rand(0, 5);
            $rating->save();
        }
    }
}
