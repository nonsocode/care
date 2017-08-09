<?php

use Illuminate\Database\Seeder;

class DriverTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\DriverType::create(['name'=>'Personal Driver']);
        \App\DriverType::create(['name'=>'Official Driver']);
        \App\DriverType::create(['name'=>'Temporary Driver']);
    }
}
