<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert([
                [   'name' => 'Assignment',
                    'status' => 'active',
                    'color' => '#2ecc71'],

                [   'name' => 'Exams',
                    'status' => 'active',
                    'color' => '#CF000F'
                ],
                [   'name' => 'Lectures',
                    'status' => 'active',
                    'color' => '#9b59b6'
                ],
                [   'name' => 'Projects',
                    'status' => 'active',
                    'color' => '#f1c40f'
                ],
                [   'name' => 'Book',
                    'status' => 'active',
                    'color' => '#d35400'],

                [   'name' => 'Quizzes',
                    'status' => 'active',
                    'color' => '#12CBC4'
                ],

                [   'name' => 'Syllabus',
                    'status' => 'active',
                    'color' => '#ecf0f1'
                ]
                ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
