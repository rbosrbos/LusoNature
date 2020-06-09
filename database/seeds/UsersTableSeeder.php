<?php
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'id' => Str::uuid(),
            'name' => 'Rui Silva',
            'email' => 'ruibatisilva@sapo.pt',
            'password' => bcrypt('Rui#1q2w3e4r'),
        ]);
        factory(User::class, 30)->create();
    }
}
