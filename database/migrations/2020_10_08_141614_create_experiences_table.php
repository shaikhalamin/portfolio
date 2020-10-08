<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('company_location');
            $table->string('company_city');
            $table->string('company_country');
            $table->string('company_website');
            $table->string('project_website')->nullable();
            $table->string('designation');
            $table->string('job_type')->comment('full time or part time');
            $table->date('date_from');
            $table->date('date_to')->nullable();
            $table->longText('job_responsibility')->comment('should be same number of line for each ');
            $table->string('work_stack')->comment('comma separated value will be inserted');
            $table->integer('profile_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('experiences');
    }
}
