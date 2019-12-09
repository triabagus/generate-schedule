<?php

use App\Models\Day;
use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::insert([
            [
                'name_day'  => 'Senin',
            ],
            [
                'name_day'  => 'Selasa',
            ],
            [
                'name_day'  => 'Rabu',
            ],
            [
                'name_day'  => 'Kamis',
            ],
            [
                'name_day'  => "Jum'at",
            ],  
        ]);
    }
}
