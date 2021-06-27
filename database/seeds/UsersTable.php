<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Mohamed Alghoush',
            'password' => '$2y$10$nIaPeaLs7vMOO9aVdX96B.P8N06BLOL8Tw5ttuSw/hl.ZWt3XknAG',
            'status' => 'active',
            'email' => 'mohamed_alghoush@studybox.live',
            'email_verified_at' =>'null',
            'role' => '3',
            'created_at' => '2020-09-23 09:02:58',
            'updated_at' => '2020-09-23 09:02:58',
            'remember_token' => 'null',
            'api_token' => 'WjZvaWZmUnZzQ21LQlRPbjAza1JET0ZMWVJVYzFFc1piRVRlblhLSQ==',
            ],
            ['name' => 'Mohamed',
            'password' => '$2y$10$LEdnKAcoklHkiQ26ACd6yORX06WaV23S.9vmQi8vhFFo2sVExnTo6',
            'status' => 'active',
            'email' => 'mohamed.alghoush58@gmail.com',
            'email_verified_at' =>'null',
            'role' => '1',
            'created_at' => '2020-12-18 14:58:32',
            'updated_at' => '2020-12-18 14:58:32',
            'remember_token' => 'null',
            'api_token' => 'Q1JOTThyYTI4ZFgxQXFoY1Y5MVJjUFpsVEM3bEdQUDg1bk1Ca3dlMw==',
            ],


        ]);
        
    }
}
