<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 23) as $index)
		{
			Post::create([
            'title' => $faker->catchPhrase,
            'body' => $faker->paragraph($nbSentences = 3),
            'user_id' => $faker->numberBetween(1, 17)
			]);
		}
	}

}
