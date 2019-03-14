<?php

use Illuminate\Database\Seeder;

class CalendarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendars')->insert([
            ['id' => 1,'name' => 'Oakway Office Floortime Calendar', 'description' => ''],
            ['id' => 2,'name' => 'Division Office Floortime Calendar', 'description' => ''],
        ]);
    }
}
