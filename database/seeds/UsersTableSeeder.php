<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Neeraj',
            'email'    => 'neerajnairnrj777@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
    }
}
