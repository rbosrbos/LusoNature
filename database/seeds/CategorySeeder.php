<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Beaches'
        ]);
        DB::table('categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Forests'
        ]);
        DB::table('categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Camping'
        ]);
        DB::table('categories')->insert([
            'id' => Str::uuid(),
            'name' => 'Fun'
        ]);
    }
}
