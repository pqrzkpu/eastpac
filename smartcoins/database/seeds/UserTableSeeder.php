<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = App\User::create([
            'username' => 'sa',
            'name' => 'Super Administrator',
            'email' => 'superadmin@mail.net',
            'mobilenumber' => '081293728732',
            'password' => Hash::make('1qaz2wsx'),
            'email_verified_at' => '2019-1-1 00:00:00'
        ]);

        // assign member role to newly registered member
        $newUser->assignRole('administrator');
        $newUser->assignRole('member');
    }
}
