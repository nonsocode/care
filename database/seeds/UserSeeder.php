<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'first_name' => "Chinonso",
            'last_name' => "Chukwuogor",
        	'username' => "nonso",
        	'email' => 'nonso@care.com.ng',
            'phone' => '07012903451',
            'bio' => "Problems : 🚢, Me: ⛰",
        	'password' => bcrypt('access'),
        ]);
    }
}