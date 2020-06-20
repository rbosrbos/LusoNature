<?php

use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        File::deleteDirectory(public_path('storage/news'));
        factory(News::class, 30)->create();
    }
}
