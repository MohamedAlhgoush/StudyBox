<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_universities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uni_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('uni_id')
              ->references('id')->on('universities')
                ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_universities');
    }
}
