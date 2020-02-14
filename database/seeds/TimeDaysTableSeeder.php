<?php

use Illuminate\Database\Seeder;
use App\Models\Timeday;

class TimeDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeday::insert([
            [
                'hari'  => 'Sabtu',
                'waktu' => '11:10 - 11:50'
            ],
            [
                'hari'  => 'Sabtu',
                'waktu' => '10:40 - 11:10'
            ],
            [
                'hari'  => 'Sabtu',
                'waktu' => '10:00 - 10:40'
            ],
            [
                'hari'  => 'Sabtu',
                'waktu' => '09:20 - 10:00'
            ],
            [
                'hari'  => 'Sabtu',
                'waktu' => '08:40 - 09:20'
            ],
            [
                'hari'  => 'Sabtu',
                'waktu' => '08:00 - 08:40'
            ],
            [
                'hari'  => 'Jumat',
                'waktu' => '11:10 - 11:50'
            ],
            [
                'hari'  => 'Jumat',
                'waktu' => '10:40 - 11:10'
            ],
            [
                'hari'  => 'Jumat',
                'waktu' => '10:00 - 10:40'
            ],
            [
                'hari'  => 'Jumat',
                'waktu' => '09:20 - 10:00'
            ],
            [
                'hari'  => 'Jumat',
                'waktu' => '08:40 - 09:20'
            ],
            [
                'hari'  => 'Jumat',
                'waktu' => '08:00 - 08:40'
            ],
            [
                'hari'  => 'Kamis',
                'waktu' => '11:10 - 11:50'
            ],
            [
                'hari'  => 'Kamis',
                'waktu' => '10:40 - 11:10'
            ],
            [
                'hari'  => 'Kamis',
                'waktu' => '10:00 - 10:40'
            ],
            [
                'hari'  => 'Kamis',
                'waktu' => '09:20 - 10:00'
            ],
            [
                'hari'  => 'Kamis',
                'waktu' => '08:40 - 09:20'
            ],
            [
                'hari'  => 'Kamis',
                'waktu' => '08:00 - 08:40'
            ],
            [
                'hari'  => 'Rabu',
                'waktu' => '11:10 - 11:50'
            ],
            [
                'hari'  => 'Rabu',
                'waktu' => '10:40 - 11:10'
            ],
            [
                'hari'  => 'Rabu',
                'waktu' => '10:00 - 10:40'
            ],
            [
                'hari'  => 'Rabu',
                'waktu' => '09:20 - 10:00'
            ],
            [
                'hari'  => 'Rabu',
                'waktu' => '08:40 - 09:20'
            ],
            [
                'hari'  => 'Rabu',
                'waktu' => '08:00 - 08:40'
            ],
            [
                'hari'  => 'Selasa',
                'waktu' => '11:10 - 11:50'
            ],
            [
                'hari'  => 'Selasa',
                'waktu' => '10:40 - 11:10'
            ],
            [
                'hari'  => 'Selasa',
                'waktu' => '10:00 - 10:40'
            ],
            [
                'hari'  => 'Selasa',
                'waktu' => '09:20 - 10:00'
            ],
            [
                'hari'  => 'Selasa',
                'waktu' => '08:40 - 09:20'
            ],
            [
                'hari'  => 'Selasa',
                'waktu' => '08:00 - 08:40'
            ],
            [
                'hari'  => 'Senin',
                'waktu' => '11:10 - 11:50'
            ],
            [
                'hari'  => 'Senin',
                'waktu' => '10:40 - 11:10'
            ],
            [
                'hari'  => 'Senin',
                'waktu' => '10:00 - 10:40'
            ],
            [
                'hari'  => 'Senin',
                'waktu' => '09:20 - 10:00'
            ],
            [
                'hari'  => 'Senin',
                'waktu' => '08:40 - 09:20'
            ],
            [
                'hari'  => 'Senin',
                'waktu' => '08:00 - 08:40'
            ]
        ]);
    }
}
