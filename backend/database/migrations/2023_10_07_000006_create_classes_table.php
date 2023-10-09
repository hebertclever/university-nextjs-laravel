<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id('class_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('instructor_id');
            $table->dateTime('date_time');
            $table->string('location');

            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('instructor_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
