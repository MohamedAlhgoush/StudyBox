<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('year');
            $table->string('semester');
            $table->boolean('main');
            $table->string('status')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('course_id');


            $table->foreign('instructor_id')
            ->references('id')->on('users')
            ->onDelete('cascade');


            $table->foreign('student_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('course_id')
            ->references('id')->on('courses')
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
        Schema::dropIfExists('uploads');
    }
}
