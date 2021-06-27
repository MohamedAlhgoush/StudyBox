<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Assignment',
            'status' => 'active',
            'created_at' => 'NULL',
            'updated_at' => 'NULL',
            'color' => '#2ecc71',
            ],
            ['name' => 'Exams',
            'status' => 'active',
            'created_at' => 'NULL',
            'updated_at' => 'NULL',
            'color' => '#CF000F',
            ],
            ['name' => 'Lectures',
            'status' => 'active',
            'created_at' => 'NULL',
            'updated_at' => 'NULL',
            'color' => '#9b59b6',
            ],
            ['name' => 'Projects',
            'status' => 'active',
            'created_at' => 'NULL',
            'updated_at' => 'NULL',
            'color' => '#f1c40f',
            ],
            ['name' => 'Book',
            'status' => 'active',
            'created_at' => 'NULL',
            'updated_at' => 'NULL',
            'color' => '#d35400',
            ],
            ['name' => 'Quizzes',
            'status' => 'active',
            'created_at' => 'NULL',
            'updated_at' => 'NULL',
            'color' => '#12CBC4',
            ],
            ['name' => 'Syllabus',
            'status' => 'active',
            'created_at' => 'NULL',
            'updated_at' => 'NULL',
            'color' => '#ecf0f1',
            ],
        ]);
    }
}
