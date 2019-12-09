<?php

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            [
                'name'         => 'IPA',
            ],
            [
                'name'         => 'Aqidah',
            ],
            [
                'name'         => 'Bahasa Arab',
            ],
            [
                'name'         => 'Bahasa Indonesia',
            ],
            [
                'name'         => 'Bahasa Inggris',
            ],
            [
                'name'         => 'Balaghoh',
            ],
            [
                'name'         => 'Biologi',
            ],
            [
                'name'         => 'Fiqih',
            ],
            [
                'name'         => 'Fisika',
            ],
            [
                'name'         => 'Hadits',
            ],
            [
                'name'         => 'Kimia',
            ],
            [
                'name'         => 'Kitabah',
            ],
            [
                'name'         => 'Computer',
            ],
            [
                'name'         => 'Maharot',
            ],
            [
                'name'         => 'Matematika',
            ],
            [
                'name'         => 'Shorof',
            ],
            [
                'name'         => 'Nahwu',
            ],
            [
                'name'         => 'Qiroah',
            ],
            [
                'name'         => 'Siroh',
            ],
            [
                'name'         => 'Tafsir',
            ],
            [
                'name'         => 'Tajwid',
            ],
            [
                'name'         => 'Tarikh',
            ],
            [
                'name'         => 'Ushul fiqih',
            ],
            [
                'name'         => 'Tahfidz',
            ],

            
        ]);
    }
}
