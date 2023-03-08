<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'	=> 'Amir',
            'email'	=> 'amir@gmail.com',
            'password'	=> bcrypt('123456')
    ]);
    }
}
