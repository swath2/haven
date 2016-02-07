<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password',60);
            $table->string('location_country');
            $table->string('location_region');
            $table->string('email')->unique();
            $table->string('company');
            $table->text('description');
            $table->string('profile_picture');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema:create('project_user', function (Blueprint $table){
        $table->integer('project_id')->unsigned();
        $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::drop('users');
        Schema::drop('project_user');
    }
}
