<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => Str::uuid(),
            'name' => 'Default Admin',
            'email' => 'admin@test.pt',
            'password' => bcrypt('123456'),
        ]);
    }
}
