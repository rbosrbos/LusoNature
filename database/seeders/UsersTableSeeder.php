<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('avatars');
        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => 'Default User',
            'email' => 'user@test.pt',
            'password' => bcrypt('123456'),
        ]);
        Storage::makeDirectory('avatars');
        User::factory()
            ->times(10)
            ->create();
    }
}
