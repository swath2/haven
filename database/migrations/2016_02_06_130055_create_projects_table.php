<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_id');
            $table->text('description');
            $table->boolean('is_public')->deafult(false);
            $table->dateTime('published');
            $table->integer('views');
            $table->integer('likes');
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('user_id');
            $table->text('content');

            $table->foreign('project_id')->references('id')->on('projects')->onDelete(cascade);
            $table->foreign('user_id')->references('id')->on('projects')->onDelete(cascade);
        });

        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('path');

            $table->foreign('project_id')->references('id')->on('projects')->onDelete(cascade);
        });

        Schema::create('colors', function (Blueprint $table){
            $table->increments('id');
            $table->integer('project_id');
            $table->string('name');
            $table->string('rgb_hex');
            $table->integer('rgb_red');
            $table->integer('rgb_green');
            $table->integer('rgb_blue');
            $table->integer('cmyk_cyan');
            $table->integer('cmyk_magenta');
            $table->integer('cmyk_yellow');
            $table->integer('cmyk_key');
            $table->integer('hsb_hue');
            $table->integer('hsb_saturation');
            $table->integer('hsb_brightness');
            $table->string('pantone');

            $table->foreign('project_id')->references('id')->on('projects')->onDelete(cascade);
        });

        Schema::create('textures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->string('name');
            $table->string('image');

            $table->foreign('project_id')->references('id')->on('projects')->onDelete(cascade);
        });

        Schema::create('fonts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id');
            $table->integer('font_id');
            $table->string('font_source')->default("fontspring");

            $table->foreign('project_id')->references('id')->on('projects')->onDelete(cascade);
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
        Schema::drop('comments');
        Schema::drop('images');
        Schema::drop('colors');
        Schema::drop('textures');
        Schema::drop('fonts');
    }
}
