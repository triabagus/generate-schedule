<?php

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::insert([
            [
                'name'       => '7a',
                'type'       => 'Putra'
            ],
            [
                'name'       => '7b',
                'type'       => 'Putra'
            ],
            [
                'name'       => '7c',
                'type'       => 'Putri'
            ],
            [
                'name'       => '7d',
                'type'       => 'Putri'
            ],
            [
                'name'       => '8a',
                'type'       => 'Putra'
            ],
            [
                'name'       => '8b',
                'type'       => 'Putra'
            ],
            [
                'name'       => '8c',
                'type'       => 'Putra'
            ],
            [
                'name'       => '8d',
                'type'       => 'Putri'
            ],
            [
                'name'       => '8e',
                'type'       => 'Putri'
            ],
            [
                'name'       => '9a',
                'type'       => 'Putra'
            ],
            [
                'name'       => '9b',
                'type'       => 'Putra'
            ],
            [
                'name'       => '9c',
                'type'       => 'Putra'
            ],
            [
                'name'       => '9d',
                'type'       => 'Putri'
            ],
            [
                'name'       => '9e',
                'type'       => 'Putri'
            ],
            [
                'name'       => '10a',
                'type'       => 'Putra'
            ],
            [
                'name'       => '10b',
                'type'       => 'Putra'
            ],
            [
                'name'       => '10c',
                'type'       => 'Putra'
            ],
            [
                'name'       => '10d',
                'type'       => 'Putra'
            ],
            [
                'name'       => '10e',
                'type'       => 'Putri'
            ],
            [
                'name'       => '10f',
                'type'       => 'Putri'
            ],
            [
                'name'       => '11a',
                'type'       => 'Putra'
            ],
            [
                'name'       => '11b',
                'type'       => 'Putra'
            ],
            [
                'name'       => '11c',
                'type'       => 'Putri'
            ],
            [
                'name'       => '12a',
                'type'       => 'Putra'
            ],
            [
                'name'       => '12b',
                'type'       => 'Putri'
            ],
            [
                'name'       => 'Ila',
                'type'       => 'Putra'
            ],
            [
                'name'       => 'Ilb',
                'type'       => 'Putri'
            ],
        ]);
    }
}
