<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultiesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            ['name' => 'The School of Arts & Sciences',
            'created_at' => '2020-09-20 13:45:04',
            'updated_at' => '2020-09-20 13:45:04',
            'uni_id' => '1',
            ],
            ['name' => 'School of Engineering',
            'created_at' => '2020-09-20 13:45:32',
            'updated_at' => '2020-09-20 13:45:32',
            'color' => '1',
            ],
        ]);
    }
}
