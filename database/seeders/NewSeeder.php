<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('news');
        News::factory()
            ->times(30)
            ->create();
    }
}
