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
    	if (appenv(['development','staging'])) {
	        factory(DriverRequest::class,60)->create();
    	}
    }
}
