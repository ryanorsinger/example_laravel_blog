<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
	{
		{
			Location::create([
                'location_name' =>
                'location_details' =>
                'address' =>
                'city' =>
                'state' =>
                'zip' =>
			]);
		}
	}

}
