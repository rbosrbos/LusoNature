<?php
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
        Storage::makeDirectory('avatars');
        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => 'Rui Silva',
            'email' => 'ruibatisilva@sapo.pt',
            'password' => bcrypt('123456'),
        ]);
        factory(User::class, 10)->create();
    }
}
