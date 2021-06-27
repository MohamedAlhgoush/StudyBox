<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_votes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('upload_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('helpfull')->default(1);
            $table->boolean('un_helpfull')->default(1);
            $table->foreign('user_id')
                ->references('id')->on('users')
                  ->onDelete('cascade');


            $table->foreign('upload_id')
                ->references('id')->on('uploads')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_votes');
    }
}
