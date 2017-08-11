<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\DriverRequest::class, function(Faker\Generator $faker){
	return [
    		'name'				=> $faker->name,
    		'email'				=> $faker->safeEmail,
    		'phone'				=> $faker->phoneNumber,
    		'address'			=> $faker->address,
    		'lga_id'			=> rand(1,10),
    		'job_description'	=> $faker->sentence,
    		'driver_type_id'	=> rand(1,3),
    		'working_hours'		=> $faker->sentence,
    		'start_date'		=> $faker->sentence,
    		'frequency'			=> $faker->sentence,
    		'pay'				=> $faker->randomNumber,
    		'call_time'			=> $faker->time,
    		'notes'				=> $faker->text,
	];
});
