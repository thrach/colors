<?php
use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::truncate();

        User::create([
            'email' => 'admin@example.com',
            'password' => bcrypt('avNGN{NLTaZ123}')
        ]);
    }
}