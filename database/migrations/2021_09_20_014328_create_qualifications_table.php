<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->smallIncrements('qual_id');
            $table->unsignedInteger('student_id');
            $table->string('subject');
            $table->string('exam_body');
            $table->string('qualification');
            $table->integer('grade');
            $table->date('year');
            $table->foreign('student_id')->references('stud_id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualifications');
    }
}