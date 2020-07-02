<?php

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
        Storage::deleteDirectory('news');
        Storage::makeDirectory('news');
        factory(News::class, 30)->create();
    }
}
