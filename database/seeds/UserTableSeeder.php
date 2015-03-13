<?php

use App\User;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'Anthony Wayne',
            'email' => 'web@wayne.edu',
            'password' => bcrypt('password'),
        ]);
    }

}