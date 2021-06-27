<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherInstructor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

              DB::table('users')->insert([
                  ['name' => 'Other',
                      'password' => Hash::make('otheinstructor'),
                      'status' => 'active',
                      'email' => 'other@studybox.live',
                      'role' => '2',
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
