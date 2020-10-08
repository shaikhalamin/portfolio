<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('live_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('stacks');
            $table->text('responsibility');
            $table->string('main_thumbnail')->nullable();
            $table->string('thumbnail_1')->nullable();
            $table->string('thumbnail_2')->nullable();
            $table->string('thumbnail_3')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
