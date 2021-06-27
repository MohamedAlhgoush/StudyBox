<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            ['name' => 'Web Server-Side',
            'code' => 'CSCI425',
            'description' => 'Web Server-Side it\'s a course that teaches how the student can make backend source code for the website',
            'major_id' => '1',
            'created_at' => '2020-09-20 13:53:15',
            'updated_at' => '2020-09-20 13:53:15',
            ],
            ['name' => 'Data Structure',
            'code' => 'CSCI350',
            'description' => 'This course covers the design and implementation of important data structures and their algorithms.\r\nThe data structures considered include stacks, queues, lists, linked lists, trees, and graphs. An approach based on abstract data types and classes will be emphasized',
            'major_id' => '2',
            'created_at' => '2021-02-10 14:31:37',
            'updated_at' => '2021-02-10 14:31:37',
            ],
        ]);
    }
}
