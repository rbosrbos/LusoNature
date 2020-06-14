<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PlaceSeeder::class);
    }
}
