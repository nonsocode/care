<?php

use App\DriverRequest;
use Illuminate\Database\Seeder;

class DriverRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DriverRequest::create([
            'name'              => "Chinonso Chukwuogor",
            'email'             => "nonso4yoo@gmail.com",
            'phone'             => "07012903451",
            'address'           => "Sabo Yaba",
            'lga_id'            => rand(1,10),
            'job_description'   => "Anything",
            'driver_type_id'    => rand(1,3),
            'working_hours'     => "all the time",
            'start_date'        => "Tomorrow",
            'frequency'         => "3 Times a week",
            'pay'               => "20000",
            'call_time'         => "10 pm tomorrow",
            'notes'             => "Please act swiftly on this",
        ]);
    	if (appenv(['development'])) {
	        factory(DriverRequest::class,60)->create();
    	}
    }
}
