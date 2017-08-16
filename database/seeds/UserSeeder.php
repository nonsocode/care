<?php

use App\User;
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
        $me = User::create([
            'first_name' => "Chinonso",
            'last_name' => "Chukwuogor",
        	'username' => "nonso",
        	'email' => 'nonso@care.com.ng',
            'phone' => '07012903451',
            'bio' => "Problems : 🚢, Me: ⛰",
        	'password' => bcrypt('access'),
            'formalities' => true
        ]);
        if (appenv(['development'])) {
            factory(User::class,30)->create();
        }
        $me->assignRole('super admin');
    }
}