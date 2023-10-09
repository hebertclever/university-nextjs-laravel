<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('person_id');
            $table->string('username');
            $table->string('password');
            $table->boolean('enabled');
            $table->timestamp('date');
            $table->unsignedBigInteger('role_id');
            $table->timestamp('creation_date');
            $table->timestamp('modification_date')->nullable();
            $table->unsignedBigInteger('created_by_user');
            $table->unsignedBigInteger('modified_by_user')->nullable();

            // Foreign Keys
            $table->foreign('person_id')->references('person_id')->on('people');
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->foreign('created_by_user')->references('user_id')->on('users');
            $table->foreign('modified_by_user')->references('user_id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
