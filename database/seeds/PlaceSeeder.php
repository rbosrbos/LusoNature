<?php

use Illuminate\Database\Seeder;
use App\Models\Place;
use App\Models\Images;
use Illuminate\Support\Facades\File;
use Faker\Generator as Faker;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        File::deleteDirectory(public_path('storage/places'));
        factory(Place::class, 10)
            ->create();
    }
}
