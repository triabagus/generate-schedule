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
                'code_courses' => '1',
                'name'         => 'IPA',
            ],
            [
                'code_courses' => '2',
                'name'         => 'Aqidah',
            ],
            [
                'code_courses' => '3',
                'name'         => 'Bahasa Arab',
            ],
            [
                'code_courses' => '4',
                'name'         => 'Bahasa Indonesia',
            ],
            [
                'code_courses' => '5',
                'name'         => 'Bahasa Inggris',
            ],
            [
                'code_courses' => '6',
                'name'         => 'Balaghoh',
            ],
            [
                'code_courses' => '7',
                'name'         => 'Biologi',
            ],
            [
                'code_courses' => '8',
                'name'         => 'Fiqih',
            ],
            [
                'code_courses' => '9',
                'name'         => 'Fisika',
            ],
            [
                'code_courses' => '10',
                'name'         => 'Hadits',
            ],
            [
                'code_courses' => '11',
                'name'         => 'Kimia',
            ],
            [
                'code_courses' => '12',
                'name'         => 'Kitabah',
            ],
            [
                'code_courses' => '13',
                'name'         => 'Computer',
            ],
            [
                'code_courses' => '14',
                'name'         => 'Maharot',
            ],
            [
                'code_courses' => '15',
                'name'         => 'Matematika',
            ],
            [
                'code_courses' => '16',
                'name'         => 'Shorof',
            ],
            [
                'code_courses' => '17',
                'name'         => 'Nahwu',
            ],
            [
                'code_courses' => '18',
                'name'         => 'Qiroah',
            ],
            [
                'code_courses' => '19',
                'name'         => 'Siroh',
            ],
            [
                'code_courses' => '20',
                'name'         => 'Tafsir',
            ],
            [
                'code_courses' => '21',
                'name'         => 'Tajwid',
            ],
            [
                'code_courses' => '22',
                'name'         => 'Tarikh',
            ],
            [
                'code_courses' => '23',
                'name'         => 'Ushul fiqih',
            ],
            [
                'code_courses' => '24',
                'name'         => 'Tahfidz',
            ],

            
        ]);
    }
}
