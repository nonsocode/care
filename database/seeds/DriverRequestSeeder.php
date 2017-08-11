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
        factory(DriverRequest::class,60)->create();
    }
}
