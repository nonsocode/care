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
            'email'             => "jasondev@gmail.com",
            'phone'             => "07012903451",
            'address'           => "Alagomeji Yaba",
            'lga_id'            => rand(1,10),
            'job_description'   => "Nothing",
            'driver_type_id'    => rand(1,3),
            'working_hours_start'     => "10:00",
            'working_hours_end'     => "3:00",
            'start_date'        => "Tomorrow",
            'frequency'         => "3 Times a week",
            'pay'               => "20000",
            'call_time_from'         => "10:00",
            'call_time_to'         => "3:00",
            'notes'             => "Please act swiftly on this",
        ]);
        DriverRequest::create([
            'name'              => "Chinonso Chukwuogor",
            'email'             => "jasondev@gmail.com",
            'phone'             => "07012903451",
            'address'           => "Alagomeji Yaba",
            'lga_id'            => rand(1,10),
            'job_description'   => "Nothing",
            'driver_type_id'    => rand(1,3),
            'working_hours_start'     => "10:00",
            'working_hours_end'     => "3:00",
            'start_date'        => "Tomorrow",
            'frequency'         => "3 Times a week",
            'pay'               => "20000",
            'call_time_from'         => "10:00",
            'call_time_to'         => "3:00",
            'notes'             => "Please act swiftly on this",
        ]);
    	if (appenv(['development'])) {
	        factory(DriverRequest::class,300)->create();
    	}
    }
}
