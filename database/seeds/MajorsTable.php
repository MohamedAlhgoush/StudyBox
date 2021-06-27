<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            ['name' => 'Computer Science',
            'created_at' => '2020-09-20 13:45:32',
            'updated_at' => '2020-09-20 13:45:32',
            'fac_id' => '1',
            ],
            ['name' => 'Computer Engineering',
            'created_at' => '2020-09-20 13:45:32',
            'updated_at' => '2020-09-20 13:45:32',
            'color' => '2',
            ],
        ]);
    }
}
