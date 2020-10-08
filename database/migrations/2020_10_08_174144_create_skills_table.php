<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('type')->comment('like database frontend backend devops');
            $table->string('functional_type')->nullable()->comment('like oop or functional or procedural or structured or cloud or vcs etc');
            $table->string('main_stack')->comment('like php or js or sql');
            $table->string('framework_1')->nullable();
            $table->string('framework_2')->nullable();
            $table->string('framework_3')->nullable();
            $table->string('framework_library')->nullable();
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
        Schema::dropIfExists('skills');
    }
}
