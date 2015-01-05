<?php
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run()
    {

        $this->makeMyselfAUser();
        $this->makeFakeUsers();
    }

    protected function makeMyselfAUser()
    {
        $user = new User;
        $user->email = $_ENV['USER_EMAIL'];
        $user->username = $_ENV['USER_USERNAME'];
        $user->password = $_ENV['USER_PASSWORD'];
        $user->first_name = $_ENV['USER_FIRSTNAME'];
        $user->last_name = $_ENV['USER_LASTNAME'];
        $user->role = 'admin';
        $user->save();
    }

    protected function makeFakeUsers()
    {
        $faker = Faker::create();
        $role = array('contributor', 'guest');

        foreach(range(1, 17) as $index)
        {
            User::create([
            'email' => $faker->safeEmail,
            'username' => $faker->userName,
            'password' => $faker->phoneNumber,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'role' => $role[rand(0,1)]
            ]);
        }
    }

}
