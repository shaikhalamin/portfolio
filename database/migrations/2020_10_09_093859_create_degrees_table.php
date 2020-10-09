<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->string('institute_name');
            $table->string('institute_city');
            $table->string('institute_country');
            $table->string('institute_address');
            $table->string('institute_website')->nullable();
            $table->string('degree_full_name');
            $table->string('degree_short_name');
            $table->string('degree_board')->nullable();
            $table->string('subject_medium');
            $table->string('course_session')->nullable();
            $table->date('degree_started_at');
            $table->date('degree_ended_at')->nullable();
            $table->string('grade_type')->nullable()->comment('like gpa or cgpa');
            $table->double('grade_total')->nullable();
            $table->double('grade_obtain')->nullable();
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
        Schema::dropIfExists('degrees');
    }
}
