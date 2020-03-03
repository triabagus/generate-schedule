<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeederUser::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(DaysTableSeeder::class);
        $this->call(LecturersTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(TeachsTableSeeder::class);
        $this->call(TimesTableSeeder::class);
        $this->call(TimeDaysTableSeeder::class);
    }
}
