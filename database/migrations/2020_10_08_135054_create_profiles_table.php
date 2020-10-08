<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('cv_name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('country');
            $table->string('postal_code');
            $table->date('date_of_birth');
            $table->string('cityzenship');
            $table->string('maritial_status');
            $table->string('designation');
            $table->string('specialized_at');
            $table->string('picture_cover');
            $table->string('picture_about');
            $table->string('linkedin_profile_path');
            $table->string('github_profile_path');
            $table->string('twitter_profile_path');
            $table->longText('about_info');
            $table->longText('profile_title')->comment('for seo');
            $table->longText('profile_meta')->comment('for better seo');
            $table->longText('profile_meta_descriptions')->comment('for better seo');
            $table->string('smo_image')->nullable()->comment('social media optimization image link');
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
        Schema::dropIfExists('profiles');
    }
}
