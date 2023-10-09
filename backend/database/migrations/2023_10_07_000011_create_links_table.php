<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id('link_id');
            $table->unsignedBigInteger('page_id');
            $table->unsignedBigInteger('role_id');
            $table->text('description')->nullable();
            $table->timestamp('creation_date');
            $table->timestamp('modification_date')->nullable();
            $table->unsignedBigInteger('created_by_user');
            $table->unsignedBigInteger('modified_by_user')->nullable();

            // Foreign Keys
            $table->foreign('page_id')->references('page_id')->on('pages');
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->foreign('created_by_user')->references('user_id')->on('users');
            $table->foreign('modified_by_user')->references('user_id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');
    }
}
