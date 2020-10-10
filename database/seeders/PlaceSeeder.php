<?php

namespace Database\Seeders;

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
        Place::factory()->times(36)->create();
    }
}
