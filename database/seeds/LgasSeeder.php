<?php

use Illuminate\Database\Seeder;

class LgasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Lga::create(['name' => 'Amuwo-Odofin']);
		App\Lga::create(['name' => 'Apapa']);
		App\Lga::create(['name' => 'Badagry']);
		App\Lga::create(['name' => 'Bariga']);
		App\Lga::create(['name' => 'Ebute Meta']);
		App\Lga::create(['name' => 'Epe']);
		App\Lga::create(['name' => 'Eti-Osa']);
		App\Lga::create(['name' => 'Ibeju-Lekki']);
		App\Lga::create(['name' => 'Ifako-Ijaye']);
		App\Lga::create(['name' => 'Ikeja']);
		App\Lga::create(['name' => 'Ikorodu']);
		App\Lga::create(['name' => 'Ikoyi - Obalende']);
		App\Lga::create(['name' => 'Ketu']);
		App\Lga::create(['name' => 'Kosofe']);
		App\Lga::create(['name' => 'Lagos Island']);
		App\Lga::create(['name' => 'Lagos Mainland']);
		App\Lga::create(['name' => 'Mushin']);
		App\Lga::create(['name' => 'Ojo']);
		App\Lga::create(['name' => 'Ojodu berger']);
		App\Lga::create(['name' => 'Oshodi-Isolo']);
		App\Lga::create(['name' => 'Shomolu']);
		App\Lga::create(['name' => 'Surulere']);
		App\Lga::create(['name' => 'Yaba']);
		App\Lga::create(['name' => 'Others']);
    }
}
