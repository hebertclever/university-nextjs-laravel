<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id('person_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->timestamp('creation_date');
            $table->timestamp('modification_date')->nullable();
            $table->unsignedBigInteger('created_by_user');
            $table->unsignedBigInteger('modified_by_user')->nullable();

            // Foreign Key
            $table->foreign('created_by_user')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('modified_by_user')->references('user_id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('people');
    }
}
