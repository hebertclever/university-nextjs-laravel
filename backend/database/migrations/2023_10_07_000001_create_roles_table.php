<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('role_id');
            $table->string('role');
            $table->timestamp('creation_date');
            $table->timestamp('modification_date')->nullable();
            $table->unsignedBigInteger('created_by_user');
            $table->unsignedBigInteger('modified_by_user')->nullable();

            // Foreign Keys
            $table->foreign('created_by_user')->references('user_id')->on('users');
            $table->foreign('modified_by_user')->references('user_id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
