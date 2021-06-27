<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UploadsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uploads')->insert([
            ['name' => 'Assignment 1',
            'year' => '2018/2019',
            'semester' => 'Spring',
            'main' => '0',
            'status' => 'Available',
            'descritption' => 'This Assignment is for a web server-side course',
            'instructor_id' => '5',
            'student_id' => '8',
            'course_id' => '1',
            'created_at' => '2020-12-18 15:00:03',
            'updated_at' => '2020-12-18 15:00:03',  
            ],
            ['name' => 'Assignment 1',
            'year' => '2017/2018',
            'semester' => 'Spring',
            'main' => '0',
            'status' => 'Available',
            'descritption' => 'This Assignment is for a web server-side course',
            'instructor_id' => '5',
            'student_id' => '7',
            'course_id' => '2',
            'created_at' => '2020-12-18 15:00:03',
            'updated_at' => '2020-12-18 15:00:03',  
            ],
            ['name' => 'Assignment 1',
            'year' => '2018/2019',
            'semester' => 'Spring',
            'main' => '0',
            'status' => 'Available',
            'descritption' => 'This Assignment is for a web server-side course',
            'instructor_id' => '5',
            'student_id' => '8',
            'course_id' => '1',
            'created_at' => '2020-12-18 15:00:03',
            'updated_at' => '2020-12-18 15:00:03',  
            ],
        ]);
    }
}
