<?php

use App\Models\Time;
use Illuminate\Database\Seeder;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Time::insert([
            [
                'time_begin' => '08:00',
                'time_finish' => '08:40',
                'range'       => '08:00 - 08:40',
            ],
            [
                'time_begin' => '08:40',
                'time_finish' => '09:20',
                'range'       => '08:40 - 09:20',
            ],
            [
                'time_begin' => '09:20',
                'time_finish' => '10:00',
                'range'       => '09:20 - 10:00',
            ],
            [
                'time_begin' => '10:00',
                'time_finish' => '10:40',
                'range'       => '10:00 - 10:40',
            ],
            [
                'time_begin' => '10:40',
                'time_finish' => '11:10',
                'range'       => '10:40 - 11:10',
            ],
            [
                'time_begin' => '11.10',
                'time_finish' => '11.50',
                'range'       => '11.10 - 11.50',
            ],
        ]);
    }
}