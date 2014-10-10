<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User;
        $user->email = $_ENV['USER_EMAIL'];
        $user->username = $_ENV['USER_USERNAME'];
        $user->password = Hash::make($_ENV['USER_PASSWORD']);
        $user->first_name = $_ENV['USER_FIRSTNAME'];
        $user->last_name = $_ENV['USER_LASTNAME'];
        $user->save();
    }

}
