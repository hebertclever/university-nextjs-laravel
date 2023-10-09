<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id('page_id');
            $table->timestamp('creation_date');
            $table->timestamp('modification_date')->nullable();
            $table->unsignedBigInteger('created_by_user');
            $table->unsignedBigInteger('modified_by_user')->nullable();
            $table->string('url');
            $table->boolean('status');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('type');

            // Foreign Keys
            $table->foreign('created_by_user')->references('user_id')->on('users');
            $table->foreign('modified_by_user')->references('user_id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
