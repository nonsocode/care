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
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,
        'username' => $faker->userName,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'bio' => $faker->sentence,
        'avatar' => $faker->imageUrl(200,200,'people'),
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
            'working_hours_start'     => $faker->time("H:i"),
    		'working_hours_end'		=> $faker->time("H:i"),
    		'start_date'		=> $faker->dateTime,
    		'frequency'			=> $faker->sentence,
    		'pay'				=> $faker->randomNumber,
            'call_time_from'         => $faker->time("H:i"),
    		'call_time_to'			=> $faker->time("H:i"),
    		'notes'				=> $faker->text,
            'created_at' => $faker->dateTimeBetween('-60 days', 'now')
	];
});