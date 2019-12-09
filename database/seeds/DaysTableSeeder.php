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
                'code_days' => 1,
                'name_day'  => 'Senin',
            ],
            [
                'code_days' => 2,
                'name_day'  => 'Selasa',
            ],
            [
                'code_days' => 3,
                'name_day'  => 'Rabu',
            ],
            [
                'code_days' => 4,
                'name_day'  => 'Kamis',
            ],
            [
                'code_days' => 5,
                'name_day'  => "Jum'at",
            ],  
        ]);
    }
}
