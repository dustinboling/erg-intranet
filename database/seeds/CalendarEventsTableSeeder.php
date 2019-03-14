<?php

use Illuminate\Database\Seeder;

class CalendarEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendar_events')->insert([
            [
                'calendar_id' => 2,
                'text' => 'Paul',
                'start_date' => '2019-03-10 09:00:00',
                'end_date' => '2019-03-10 13:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Barry',
                'start_date' => '2019-03-10 13:00:00',
                'end_date' => '2019-03-10 17:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Erin',
                'start_date' => '2019-03-11 09:00:00',
                'end_date' => '2019-03-11 13:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Katie',
                'start_date' => '2019-03-11 13:00:00',
                'end_date' => '2019-03-11 17:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Tiffany',
                'start_date' => '2019-03-12 09:00:00',
                'end_date' => '2019-03-12 13:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Amanda',
                'start_date' => '2019-03-12 13:00:00',
                'end_date' => '2019-03-12 17:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Paul',
                'start_date' => '2019-03-13 09:00:00',
                'end_date' => '2019-03-13 13:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Barry',
                'start_date' => '2019-03-13 13:00:00',
                'end_date' => '2019-03-13 17:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Erin',
                'start_date' => '2019-03-14 09:00:00',
                'end_date' => '2019-03-14 13:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Katie',
                'start_date' => '2019-03-14 13:00:00',
                'end_date' => '2019-03-14 17:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Tiffany',
                'start_date' => '2019-03-15 09:00:00',
                'end_date' => '2019-03-15 13:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Amanda',
                'start_date' => '2019-03-15 13:00:00',
                'end_date' => '2019-03-15 17:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Tiffany',
                'start_date' => '2019-03-16 09:00:00',
                'end_date' => '2019-03-16 13:00:00'
            ],
            [
                'calendar_id' => 2,
                'text' => 'Amanda',
                'start_date' => '2019-03-16 13:00:00',
                'end_date' => '2019-03-16 17:00:00'
            ],
        ]);
    }
}
