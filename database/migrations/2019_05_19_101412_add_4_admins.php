<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add4Admins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        DB::table('users')->insert([
            ['name' => 'Mohammed Seblini',
             'password' => Hash::make('studybox1'),
             'status' => 'active',
             'email' => 'mhdseblini@studybox.live',
             'role' => '3',
             'api_token' => base64_encode( str_random( 40 ) )],

            ['name' => 'Khalil Zayour',
                'password' => Hash::make('studybox2'),
                'status' => 'active',
                'email' => 'khalilzayour@studybox.live',
                'role' => '3',
                'api_token' => base64_encode( str_random( 40 ) )],

            ['name' => 'Mohamed AlGhoush',
                'password' => Hash::make('studybox3'),
                'status' => 'active',
                'email' => 'mohamed_alghoush@studybox.live',
                'role' => '3',
                'api_token' => base64_encode( str_random( 40 ) )],

            ['name' => 'Ahmad Freijeh',
                'password' => Hash::make('studybox0'),
                'status' => 'active',
                'email' => 'ahmadfreijeh@studybox.live',
                'role' => '3',
                'api_token' => base64_encode( str_random( 40 ) )]
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
