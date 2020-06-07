<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rui Silva',
            'email' => 'ruibatisilva@sapo.pt',
            'password' => bcrypt('Rui#1q2w3e4r'),
        ]);
    }
}
