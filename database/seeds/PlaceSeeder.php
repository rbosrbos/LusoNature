<?php

use Illuminate\Database\Seeder;
use App\Models\Place;
use App\Models\Images;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('places');
        factory(Place::class, 100)
            ->create();
    }
}
