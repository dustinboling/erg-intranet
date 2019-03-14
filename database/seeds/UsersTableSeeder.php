<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert the initial users
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Dustin',
                'first_name' => 'Dustin',
                'last_name' => 'Boling',
                'phone' => '541-555-1212',
                'website' => 'https://eugenerealtygroup.com',
                'email' => 'dustin@eugenerealtygroup.com',
                'password' => bcrypt('123456')
            ],
            [
                'id' => 2,
                'name' => 'Shannon',
                'first_name' => 'Shannon',
                'last_name' => 'Doyle',
                'phone' => '541-555-1212',
                'website' => 'https://eugenerealtygroup.com',
                'email' => 'shannon@eugenerealtygroup.com',
                'password' => bcrypt('123456'),
            ],
        ]);
    }
}
